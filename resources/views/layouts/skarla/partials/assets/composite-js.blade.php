
@if (isset($uses))

@if (in_array("sg-formatter", $uses))
<script src="{{skarla_assets_url("vendor/js/moment.min.js")}}"></script>
<script src="{{url("js/sg-formatter.js")}}"></script>
@endif

@if (in_array("dropdown-table", $uses))

@include('templates.default-dropdown-table-actions')

<script src="{{url("vendor/underscore/underscore-min.js")}}"></script>
<script src="{{url("js/module/sg-formatter.js")}}"></script>
<!--<script src="{{url("js/sg-table-row-utilities.js")}}"></script>-->
<script src="{{url("js/module/dropdown-table.js")}}"></script>
@endif

@if (in_array("datepicker", $uses))
<script src="{{skarla_assets_url("vendor/js/moment.min.js")}}"></script>
<script src="{{skarla_assets_url("vendor/js/daterangepicker.min.js")}}"></script>
@endif

@if (in_array("fullcalendar", $uses))
<script src="{{skarla_assets_url("vendor/js/jquery-ui-draggable.min.js")}}"></script>
<script src="{{skarla_assets_url("vendor/js/moment.min.js")}}"></script>
<script src="{{skarla_assets_url("vendor/js/fullcalendar.min.js")}}"></script>
@endif

@if (in_array("datatables", $uses))

@include('templates.table-inline-actions')

<script src="{{skarla_assets_url("vendor/js/moment.min.js")}}"></script>
<script src="{{url("js/sg-formatter.js")}}"></script>

<script src="{{skarla_assets_url("vendor/js/jquery.dataTables.min.js")}}"></script>
<script src="{{skarla_assets_url("vendor/js/dataTables.bootstrap.min.js")}}"></script>
<script src="{{url("vendor/underscore/underscore-min.js")}}"></script>
<script src="{{url("js/datatable-utilities.js")}}"></script>
@endif

@if (in_array("form", $uses))
<script src="{{url("vendor/underscore/underscore-min.js")}}"></script>
<script src="{{url("vendor/jquery-validation/jquery.validate.js")}}"></script>
<script src="{{url("js/module/form-utilities.js")}}"></script>
@endif

@endif
