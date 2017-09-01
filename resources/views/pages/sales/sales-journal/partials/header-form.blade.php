<form class="fields-container">

    <div class="hidden">
        <input name="location_code" value="{{$localLocationCode}}">
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="select-customer-name">Customer</label>
                <select name="customer_number" id="select-customer-name" class="form-control">
                    @foreach($customers AS $customer)
                    <option value="{{$customer->customer_number}}">{{$customer->display_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="control-label" for="input-ext-doc-number">External/Control Document Number</label>
                <input name="external_document_number" value="{{$sj->external_document_number}}" id="input-ext-doc-number" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label class="control-label" for="input-sales-amount">Total Sales Amount</label>
                <input name="total_sales_amount" value="{{$sj->total_sales_amount}}" id="input-sales-amount" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label class="control-label" for="input-amount-received">Amount Received</label>
                <input name="amount_received" value="{{$sj->amount_received}}" id="input-amount-received" type="text" class="form-control">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="input-due-date">Due Date</label>
                <input name="due_date" value="{{$sj->due_date->format("m/d/Y")}}" id="input-due-date" type="text" class="form-control datepicker">
            </div>

            <div class="form-group">
                <label class="control-label" for="select-customer-name">Attending Physician</label>
                <select name="customer_number" id="select-customer-name" class="form-control">
                    <option value="N/A">Not Applicable</option>                    
                </select>
            </div>

            <div class="form-group">
                <label class="control-label" for="input-remarks">Remarks</label>
                <textarea name="remarks" id="input-remarks" class="form-control full-width h-120">{{$sj->remarks}}</textarea>
            </div>

        </div>

        <div class="col-md-4">



        </div>
    </div>


</form>