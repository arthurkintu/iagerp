<!-- Quotationno Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('QuotationNo', 'Quotationno:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('QuotationNo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Suppliername Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SupplierName', 'Suppliername:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('SupplierName', $suppliersData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONumber', $taskOrderData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Date', 'Date:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('Date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>





<!-- Naration Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Naration', 'Naration/Description:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Naration', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- TONumber Field -->
<div class="form-group">
    {!! Form::label('TONumber', 'TONumber:') !!}
    <select name="TONumber" id="TONumber" class="form-control">
        @foreach($tonumbers as $tonumber)
            <option value="{{ $tonumber }}">{{ $tonumber }}</option>
        @endforeach
    </select>
    <!-- Add a button to reload the table -->
    <button class="btn btn-primary" onclick="reloadTable()">Reload Table</button>
</div>

<div class="table-responsive">
    <table class="table table-bordered" id="itemTable">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Unit of Measure</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Amount</th>
                <th>Action</th> <!-- Add a new column for the delete action -->
            </tr>
        </thead>
        <tbody>
            {{-- Existing rows --}}
            @if(isset($quotationItemsByTONumber))
                @foreach($quotationItemsByTONumber as $tonumber => $quotationItems)
                    @if($selectedTONumber == $tonumber)
                        @foreach($quotationItems as $quotationItem)
                            <tr>
                                <td>{{ $quotationItem->ItemName }}</td>
                                <td>{{ $quotationItem->ItemUnit }}</td>
                                <td>{{ $quotationItem->Quantity }}</td>
                                <td>{{ $quotationItem->UnitPrice }}</td>
                                <td>{{ $quotationItem->TotalAmount }}</td>
                                <td>
                                    <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<script>
    function reloadTable() {
        var selectedTONumber = document.getElementById('TONumber').value;
        // Redirect to the current page with the selected TONumber as a query parameter
        window.location.href = window.location.pathname + '?TONumber=' + selectedTONumber;
    }

    function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>













<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('quotations.index') }}" class="btn btn-default">Cancel</a>
</div>
