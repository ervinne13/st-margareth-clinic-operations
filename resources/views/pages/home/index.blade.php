
<?php
$viewPath = "pages.home";
?>

@extends('layouts.skarla')

@section('js')
<script src="{{url("js/pages/home.js")}}"></script>
@endsection

@section('content')

<div class="row">

    <!-- START Payment & Invoices -->
    <div class="col-md-4">
        @include("{$viewPath}.widgets.sales-summary")
    </div>
    <!-- END Payment & Invoices -->

    <div class="col-md-4">
        @include("{$viewPath}.widgets.overdue-ar")
    </div>

    <div class="col-md-4">
        @include("{$viewPath}.widgets.due-ar")
    </div>  
</div>  

@endsection