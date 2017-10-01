<script id="detail-form-tmpl" type="text/html">

    <form id="sj-detail-form">
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label class="control-label" for="select-item-type">Item Type</label>
                    <select name="item_type_code" id="select-item-type" class="form-control">
                        <option>Demo - No Item Types Yet</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="select-item-name">Item Name</label>
                    <select name="item_display_name" id="select-item-name" class="form-control">
                        <option>Demo - No Items Yet</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="input-item-number">Item ID</label>
                    <input name="item_number" readonly id="input-item-number" type="text" class="form-control">
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label class="control-label" for="input-qty">Qty</label>
                    <input name="item_qty" id="input-qty" type="number" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label" for="input-unit-price">Unit Price</label>
                    <input name="unit_price" id="input-unit-price" type="number" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label" for="input-total-price">Total Price</label>
                    <input name="total_price" id="input-total-price" readonly type="number" class="form-control">
                </div>

            </div>
        </div>
    </form>

</script>