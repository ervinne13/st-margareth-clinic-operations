
class SJDetailsTableViewPresenter {

    construct() {

    }

    initialize() {
        this.esTableInstance = $('#sj-details-table').DropdownTable({
            dropdownRowTemplate: '#detail-form-tmpl',
            dropdownRowCreateActionsTemplate: '#default-form-create-actions-tmpl',
            dropdownRowEditActionsTemplate: '#default-form-edit-actions-tmpl',
            idColumn: 'line_no',
            displayInlineActions: true,
            highlighColor: '#F78B3E',
            closeRowActionIcon: '<i class="glyphicon glyphicon-chevron-up"></i>',
            openRowActionIcon: '<i class="glyphicon glyphicon-edit"></i>',
            columns: {
                line_no: {label: "", hidden: true},
                document_number: {label: "", hidden: true},
                item_display_name: {label: "Item"},
                item_code: {label: "Item Code"},
                unit_price: {label: "Unit Price"},
                qty: {label: "Qty"},
                total_price: {label: "Total"},
            }
        });

        this.esTableInstance.setData([]);
        this.esTableInstance.on('openRow', function (e, id) {
//            _this.initializeForm(_this.esTableInstance.getRowData(id), id);
//            _this.initializeEvents();
        });

        this.esTableInstance.on('deleteRow', function () {

        });

        console.log('test');
    }

}
