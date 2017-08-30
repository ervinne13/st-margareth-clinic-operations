
(function () {

    $(document).ready(function () {

        loadOverDueInvoicesChart();
        loadDueInvoicesChart();

    });

    function loadOverDueInvoicesChart() {

        let peitySettings = {
            fill: ["#579EF7", "#40C697", "#63ddca"],            
            radius: 48
        };

        $('#overdue-invoices-peity-chart').peity('pie', peitySettings);
    }

    function loadDueInvoicesChart() {

        let peitySettings = {
            fill: ["#579EF7", "#40C697"],            
            radius: 48
        };

        $('#due-invoices-peity-chart').peity('pie', peitySettings);
    }

})();
