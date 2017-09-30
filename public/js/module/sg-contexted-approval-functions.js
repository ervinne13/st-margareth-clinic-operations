
var SGContextedApprovalFunctions = {};

(function (SGCAF) {

    SGCAF.initializeDetailBasedApproval = function ($SGTable, statusFieldName) {

        $SGTable.on('onRowCheckChanged', function (e, rowId) {
            let checkedRows = $SGTable.getCheckedRowsData();
            let commonStatus = null;

            let selectedDetailIdList = [];

            try {
                checkedRows.forEach(row => {

                    selectedDetailIdList.push(row[$SGTable.sgOptions.idColumn]);

                    if (commonStatus === null) {
                        commonStatus = row[statusFieldName];
                    } else if (commonStatus != row[statusFieldName]) {
                        throw {
                            name: "Uncommon Status Exception",
                            message: "Unable to extract a context since rows' status are not common"
                        };
                    }
                });
            } catch (e) {
                if (e.name == "Uncommon Status Exception") {
                    commonStatus = null;
                } else {
                    throw e;
                }
            }

            SGCAF.enableActionsWithStatus(commonStatus, selectedDetailIdList);

        });

        //  start with blank status to disable all actions first
        SGCAF.enableActionsWithStatus('', []);

    };

    SGCAF.enableActionsWithStatus = function (status, selectedDetailIdList) {

        $('.action-button').each(function () {

            let appliesToStatus = $(this).data('applies-to-status');
            if (appliesToStatus) {
                let statusList = appliesToStatus.split(",");

                //  button is disabled if data-applies-to-status does not contain the
                //  status passed to this function
                $(this).prop('disabled', statusList.indexOf(status) < 0);
            }

            $(this).data('applies-to-id-list', selectedDetailIdList.join(','));

        });

    };

})(SGContextedApprovalFunctions);
