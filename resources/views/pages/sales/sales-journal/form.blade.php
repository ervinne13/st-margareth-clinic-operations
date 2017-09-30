<?php
$viewPath = "pages.sales.sales-journal";
$uses     = ["form", "datepicker", "dropdown-table"];
?>

@extends('layouts.skarla')

@section('js')

@include("{$viewPath}.templates.detail-form-tmpl")

<script src="{{url("js/pages/sales/sales-journal/details-table-view-presenter.js")}}"></script>
<script src="{{url("js/pages/sales/sales-journal/form.js")}}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="row m-b-2">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h4 class="m-b-0 ">Sales Journal <small>{{$routeActionName}}</small></h4>                
            </div>
            <div class="col-md-4 pull-right">
                <h4 class="text-right">Document: <b class="text-brilliant-rose text-">SJ-00010</b></h4>
            </div>
        </div>        
        <div class="panel panel-default b-a-0 p-10 shadow-box">            

            @include("{$viewPath}.partials.header-form")

            <table id="sj-details-table" class="table table-striped">            
                <thead>
                    <tr>
                        <th></th>
                        <th>Item</th>
                        <th>Item Code</th>
                        <th>Qty</th>
                        <th>Unit Price</th>                        
                        <th>Total Price</th>                                               
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            <div class="clearfix"></div>

            @include('module.form-actions')

            <div class="clearfix"></div>

        </div>
    </div>
</div>

@endsection