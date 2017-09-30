/* global moment, SGFormatter, globals, baseUrl, swal */

var form_utilities = {
    // constants
    SERVER_DATETIME_FORMAT: "YYYY-MM-DD HH:mm:ss",
    SERVER_DATE_FORMAT: "YYYY-MM-DD",
    SERVER_TIME_FORMAT: "HH:mm",
    DISPLAY_DATE_FORMAT: "dddd, MMMM DD YYYY",
    DISPLAY_TIME_FORMAT: "hh:mm a",
    // variables
    moduleUrl: "/",
    updateObjectId: 0,
    postValidate: false,
    // behavioral attribues
    useFullDetailsData: false,
    validate: null,
    useIntegerForBooleanValues: false,
    // overridables
    errorHandler: null,
    successHandler: null,
    appendDataOnSave: null
};

form_utilities.disableFieldsOnViewMode = function (mode) {
    $('.form-control').prop('disabled', mode === "view");
    $('[type=checkbox]').prop('disabled', mode === "view");
};

form_utilities.formToJSON = function ($form) {

    var json = {};

    $($form.selector + ' :input').each(function () {
        var name = $(this).attr('name');
        var type = $(this).attr('type');
        var value = $(this).val();

        if (type == "checkbox") {
            value = $(this).is(':checked');

            if (form_utilities.useIntegerForBooleanValues) {
                value = value ? 1 : 0;
                console.log(name, value);
            }
        }

        if ($(this).data('autoNumeric')) {
            value = $(this).autoNumeric('get');
        }

        if ($(this).data('date-format')) {
            //  auto date processing requires momentjs
            if (moment) {
                value = moment(value, $(this).data('date-format'))
                        .format(SGFormatter.SERVER_DATE_FORMAT);

                if (value == 'Invalid date') {
                    value = null;
                }
            } else {
                console.warn("Date formatting detected but momentjs is not included in the scripts!");
            }
        }

        if ($(this).data('time-format')) {
            //  auto date processing requires momentjs
            if (moment) {
                value = moment(value, $(this).data('time-format'))
                        .format(SGFormatter.SERVER_TIME_FORMAT);

                if (value == 'Invalid date') {
                    value = null;
                }
            } else {
                console.warn("Date formatting detected but momentjs is not included in the scripts!");
            }
        }

        if (name && value !== undefined && value !== null) {
            json[name] = value;
        }
    });

    return json;
};

form_utilities.initSwitchery = function (selector, settings) {
    var switches = document.querySelectorAll(selector);
    var switchesIter = Array.prototype.slice.call(switches);
    switchesIter.forEach(function (switcher) {
        new Switchery(switcher, settings);
    });
};

form_utilities.initializeDefaultSelect2 = function () {
    if ($('.select2-input').length === 0) {
        return;
    }

    $('.select2-input').on("select2:open", function () {
        if ($(this).parents("[class*='has-']").length) {
            var classNames = $(this).parents("[class*='has-']")[ 0 ].className.split(/\s+/);

            for (var i = 0; i < classNames.length; ++i) {
                if (classNames[ i ].match("has-")) {
                    $("body > .select2-container").addClass(classNames[ i ]);
                }
            }
        }
    }).select2({
        theme: "bootstrap"
    });
};

form_utilities.initializeDefaultTimePicker = function () {
    $('.timepicker').each(function () {
        var originalValue = $(this).val();

        if (originalValue) {
            var displayValue = moment(originalValue, SGFormatter.SERVER_TIME_FORMAT)
                    .format(SGFormatter.DISPLAY_TIME_FORMAT);
            $(this).val(displayValue);
        }

        $(this).bootstrapMaterialDatePicker({
            format: SGFormatter.DISPLAY_TIME_FORMAT,
            clearButton: true,
            weekStart: 1,
            date: false,
            time: true
        });
    });
};

form_utilities.initializeDefaultDatePicker = function () {
    $('.datepicker').each(function () {

        var originalValue = $(this).val();

        if (originalValue) {
            var displayValue = moment(originalValue, SGFormatter.SERVER_DATE_FORMAT)
                    .format(SGFormatter.DISPLAY_DATE_FORMAT);
            $(this).val(displayValue);
        }

        $(this).bootstrapMaterialDatePicker({
            format: SGFormatter.DISPLAY_DATE_FORMAT,
            clearButton: true,
            weekStart: 1,
            time: false
        });
    });

};

form_utilities.setFieldsRequiredDisplay = function () {
    $('.form-control').each(function () {
        if ($(this).prop("required")) {
            var id = $(this).attr('id');
            var $label = $('[for=' + id + ']');

            if (!$label.length) {
                $label = $(this).siblings('label');
            }

            var originalText = $label.html();
            $label.html(originalText + ' <span class="text-danger">*</span>');
        }

    });
};

form_utilities.setFieldError = function (fieldName, errorMessage) {
    var errorLabelHtml = '<label id="' + fieldName + '-error" class="error" for="' + fieldName + '">' + errorMessage + '</label>';

    //  clear previous error
    $('#' + fieldName + '-error').remove();

    //  insert new error
    $('[name=' + fieldName + ']').parent().append(errorLabelHtml);
};

form_utilities.enableActionButtons = function (enable) {
    $('.action-button').prop('disabled', !enable);
};

form_utilities.initializeDefaultProcessing = function ($form, $detailSGTable) {

    if (!$form) {
        console.error("Form not defined");
        return;
    }

    $('#action-close').click(function () {
        window.location.href = form_utilities.moduleUrl;
    });

    $('.saving-action-button').click(function () {

        var actionType = $(this).data('action-type');
        var actionId = $(this).attr('id');
        var actionFunction = $(this).data('function');
        var requiresRemarks = $(this).data('requires-remarks') == true;
        var appliesToIdList = $(this).data('applies-to-id-list');

        if (actionType == 'approval') {

            let mode = $(this).data('mode');
            if (mode == 'create') {
                actionId = 'action-create-close';
            } else if (mode == 'edit') {
                actionId = 'action-update-close';
            }
        }

        var valid = true;
        //  validation 1
        if (form_utilities.validate) {
            valid = $form.valid();
        }

        //  validation 2
        if (valid && form_utilities.postValidate) {
            try {
                valid = form_utilities.postValidate();
            } catch (e) {
                valid = false;
                swal("Error", "Validation Error: " + e.message, "error");
                return;
            }
        }

        if (valid) {
            var data = form_utilities.formToJSON($form);

            if ($detailSGTable && form_utilities.useFullDetailsData) {
                data.details = JSON.stringify($detailSGTable.getFullData());
            } else if ($detailSGTable) {
                data.details = JSON.stringify($detailSGTable.getModifiedData());
            }

            if (form_utilities.appendDataOnSave) {
                var newData = form_utilities.appendDataOnSave(data);

                for (var key in newData) {
                    data[key] = newData[key];
                }
            }

            if (appliesToIdList) {
                data.appliesToIdList = appliesToIdList.split(',');
            }

            try {
                form_utilities.process(actionId, actionFunction, data, requiresRemarks, function (success, message) {
                    //  process done, re enable buttons regardless of result                    
                    if (success) {
                        if (form_utilities.successHandler) {
                            form_utilities.successHandler(message);
                        } else {

                            let document = {};
                            let successMessage = form_utilities.onSaveMessage ? form_utilities.onSaveMessage : 'Saved!';

                            if (form_utilities.SGNumberSeriesInstance && form_utilities.docNoField) {
                                document = typeof message === 'string' ? JSON.parse(message) : message;

                                console.log(document[form_utilities.docNoField] + " " + form_utilities.SGNumberSeriesInstance.getGeneratedNumberSeries());
//                                throw new Error('test');
                                if (document[form_utilities.docNoField] != $('[name=' + form_utilities.docNoField + ']').val()) {
                                    successMessage += " Document number updated: " + document[form_utilities.docNoField];
                                }


                            }

                            swal("Success!", successMessage, "success");

                            setTimeout(function () {
                                if (actionId == "action-create-new") {
                                    window.location.reload();
                                } else if (actionId == "action-create-edit" && form_utilities.SGNumberSeriesInstance.getGeneratedNumberSeries()) {
                                    window.location.href = form_utilities.moduleUrl + "/" + form_utilities.SGNumberSeriesInstance.getGeneratedNumberSeries() + "/edit";
                                } else {
//                                    window.location.href = form_utilities.moduleUrl;
                                    window.history.back();
                                }
                            }, globals.redirectTimeoutMS ? globals.redirectTimeoutMS : 3000);
                        }
                    } else {
                        console.error(message);

                        if (form_utilities.errorHandler) {
                            form_utilities.errorHandler(message);
                        } else {
                            swal("Error!", message, "error");
                        }

                        form_utilities.enableActionButtons(true);
                    }
                });

                //  to avoid double processing, disable the buttons then re enable later
                form_utilities.enableActionButtons(false);

            } catch (e) {
                console.error(e);
                console.error(data);

                if (form_utilities.errorHandler) {
                    form_utilities.errorHandler(e);
                } else {
                    swal("Error!", e, "error");
                }

//                if (e.statusText) {
//                    swal("Error!", e.statusText, "error");
//                }
            }
        } else {
            console.error("Validation failed");

            swal("Error", "Some of the fields has errors. Please check.", "error");
        }

    });

};

form_utilities.process = function (actionId, actionFunction, data, requiresRemarks, callback) {

    var url, method;

    data.action = actionFunction;

    if (!form_utilities.updateObjectId && form_utilities.SGNumberSeriesInstance) {
        form_utilities.updateObjectId = form_utilities.SGNumberSeriesInstance.getGeneratedNumberSeries();
    }

    if (actionFunction) {
        url = baseUrl + "/system/document-approval/" + actionFunction;
        method = 'POST';

        data.moduleId = form_utilities.moduleId;
        data.documentNumber = form_utilities.SGNumberSeriesInstance.getGeneratedNumberSeries();
    }

    if (actionId == "action-create-new" || actionId == "action-create-close" || actionId == "action-create-edit") {
        url = form_utilities.moduleUrl;
        method = 'POST';
    } else if (actionId == "action-update-close") {
        url = form_utilities.moduleUrl + "/" + form_utilities.updateObjectId;
        method = 'PUT';
    } else if (actionId == "action-update-post" || actionId == "action-create-post") {
        url = form_utilities.moduleUrl + "/post/" + (form_utilities.updateObjectId ? form_utilities.updateObjectId : false);
        method = 'POST';
    }

    if (requiresRemarks) {
        swal({
            title: "Are you sure you want to reject this document?",
            text: "Write remarks as to why you're rejecting",
            type: "input",
            showCancelButton: true,
            closeOnConfirm: false,
            animation: "slide-from-top",
            inputPlaceholder: "Rejection remarks"
        }, function (remarks) {
            if (remarks === false)
                return false;

            if (remarks === "") {
                swal.showInputError("You need to provide remarks!");
                return false;
            }

            data.remarks = remarks;
            form_utilities.sendAjax(url, method, data, callback);
            swal("Please wait...", "Rejecting with with remarks: " + remarks);
        });
    } else {
        form_utilities.sendAjax(url, method, data, callback);
    }
};

form_utilities.sendAjax = function (url, method, data, callback) {
    $.ajax({
        url: url,
        type: method,
        data: data,
//        dataType: 'json',
        success: function (response) {
            console.log(response);
            callback(true, response);
        },
        error: function (response) {
            callback(false, response.responseText);
        }
    });
};