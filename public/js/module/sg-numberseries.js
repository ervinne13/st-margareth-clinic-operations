
/* global sg_spinner_utilities, globals, baseUrl */

(function ($) {

    var NSJoinString = '-';

    $.fn.SGNumberSeries = function (options) {

        var _this = this;

        //<editor-fold defaultstate="collapsed" desc="Options Initialization">
        options = options ? options : {};

        this.settings = $.extend({
            // These are the defaults.
            id: $(this).attr('id') ? $(this).attr('id') : 'SGNumberSeries',
            moduleId: $(this).data('module-id'),
            spinner: 'cube',
            docNo: $(this).data('doc-no'),
            onErrorRedirectUrl: $(this).data('doc-no'),
        }, options);

        //</editor-fold>

        if (this.settings.docNo) {
            $(this).html(this.settings.docNo);
        } else {
            loadPossibleNumberSeriesAndChoose(this.settings.moduleId)
                    .then(numberSeries => {
                        _this.generatedDocNo = numberSeries;
                        $(_this).html(numberSeries);
                    }, error => {
                        failureRedirect(error);
                    });

            sg_spinner_utilities.showAndReplace($(this), this.settings.id, this.settings.spinner);
        }

        this.initialize = function () {
            this.generatedDocNo = this.settings.docNo;
            return this;
        };

        this.getGeneratedNumberSeries = function () {
            return this.generatedDocNo;
        };

        return this.initialize();

    };

    function loadPossibleNumberSeriesAndChoose(moduleId) {

        let promise = new Promise((resolve, reject) => {

            let url = baseUrl + "/system/number-series/list-available";
            let params = {
                moduleId: moduleId
            };

            $.get(url, params, response => {
                if (response.length === 0) {
                    reject('No number series available for this module');
                } else if (response.length === 1) {
                    try {
                        resolve(generateNumberSeries(response[0]));
                    } catch (e) {
                        reject(e);
                    }
                } else if (response.length > 1) {
                    try {
                        //  TODO: add selection here
                        resolve(generateNumberSeries(response[0]));
                    } catch (e) {
                        reject(e);
                    }
                }
            }).fail(xhr => {
                console.error(xhr);
                reject(xhr.responseText);
            });

        });

        return promise;
    }

    function generateNumberSeries(NSRow) {
        let newNumber = parseInt(NSRow.NS_LastNoUsed) + 1;
        let NSId = NSRow.NS_Id;

        if (newNumber <= NSRow.NS_EndingNo) {
            newNumber = pad(newNumber, ("" + NSRow.NS_EndingNo).length);
            return NSId + NSJoinString + newNumber;
        } else {
            throw new Error("Number series " + NSId + " is already maxed out!");
        }
    }

    function failureRedirect(message, redirectUrl) {

        setTimeout(function () {
            if (redirectUrl) {
                window.location.href = redirectUrl;
            } else {
                window.history.back();
            }
        }, globals.redirectTimeoutMS);
        swal('Error', message, 'error');

    }

    function pad(rawString, width, padString) {
        padString = padString || '0';
        rawString = rawString + '';
        return rawString.length >= width ? rawString : new Array(width - rawString.length + 1).join(padString) + rawString;
    }

})(jQuery);    