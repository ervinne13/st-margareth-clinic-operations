<form class="fields-container">

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="select-customer-name">Customer Name</label>
                <select name="customer_display_name" id="select-customer-name" class="form-control">
                    <option>Demo - No Customers Yet</option>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label" for="input-customer-number">Customer ID</label>
                <input name="customer_number" value="{{$sj->customer_number}}" readonly id="input-customer-number" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label class="control-label" for="input-customer-address">Customer Address</label>
                <textarea name="customer_address" readonly id="input-customer-address" class="form-control full-width h-120">{{$sj->customer_address}}</textarea>
            </div>

        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="input-doc-date">Document Date</label>
                <input name="document_date" value="{{$sj->document_date->format("m/d/Y")}}" readonly id="input-doc-date" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label class="control-label" for="input-ext-doc-number">External Document Number</label>
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
                <label class="control-label" for="select-location">Location</label>
                <select name="location_code" id="select-location" class="form-control">
                    <option>Demo - No Locations Yet</option>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label" for="input-remarks">Remarks</label>
                <textarea name="remarks" id="input-remarks" class="form-control full-width h-120">{{$sj->remarks}}</textarea>
            </div>

        </div>
    </div>


</form>