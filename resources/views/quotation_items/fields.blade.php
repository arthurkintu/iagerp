<!-- Quotationnumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('QuotationNumber', 'Quotationnumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('QuotationNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONumber', $taskOrderData, null, ['class' => 'form-control', 'id' => 'TONumber']) !!}
        </div>
    </div>
</div>


<!-- Itemname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ItemName', 'Itemname:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('ItemName', $toMaterialsData, null, ['class' => 'form-control', 'id' => 'ItemName']) !!}
        </div>
    </div>
</div>






<!-- Itemunit Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ItemUnit', 'Itemunit:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('ItemUnit', [
                'Bags' => 'Bags',
                'Boxes' => 'Boxes',
                'CUM' => 'CUM',
                'KGs' => 'KGs',
                'Pairs' => 'Pairs',
                'Pieces' => 'Pieces',
                'Tones' => 'Tones',
                'Trips' => 'Trips'
            ], null, ['class' => 'form-control', 'id' => 'ItemUnit']) !!}
        </div>
    </div>
</div>


<!-- Quantity Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Quantity', 'Quantity:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Quantity', null, ['class' => 'form-control', 'id' => 'Quantity']) !!}
        </div>
    </div>
</div>

<!-- Unitprice Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('UnitPrice', 'Unitprice:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('UnitPrice', null, ['class' => 'form-control', 'id' => 'UnitPrice']) !!}
        </div>
    </div>
</div>

<!-- Totalamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TotalAmount', 'Totalamount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TotalAmount', null, ['class' => 'form-control', 'id' => 'TotalAmount', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>


<!-- HTML table to display quotation items -->
<table id="quotationItemsTable" class="table">
    <thead>
        <tr>
            <th>Quotation Number</th>
            <th>TONumber</th>
            <th>Item Name</th>
            <th>Item Unit</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    <tbody>
        <!-- Quotation items will be dynamically inserted here -->
    </tbody>
</table>

<script>
    // Calculate TotalAmount based on Quantity and UnitPrice
    function calculateTotalAmount() {
        var quantity = parseFloat(document.getElementById('Quantity').value);
        var unitPrice = parseFloat(document.getElementById('UnitPrice').value);
        var totalAmount = quantity * unitPrice;
        document.getElementById('TotalAmount').value = totalAmount.toFixed(2);
    }

    // Listen for changes in Quantity and UnitPrice fields
    document.getElementById('Quantity').addEventListener('input', calculateTotalAmount);
    document.getElementById('UnitPrice').addEventListener('input', calculateTotalAmount);

    // Calculate TotalAmount on page load
    calculateTotalAmount();
</script>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('quotationItems.index') }}" class="btn btn-default">Cancel</a>
</div>



