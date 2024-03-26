<!-- TONumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONumber', collect($quotationItemsByTONumber)->pluck('TONumber'), null, ['class' => 'form-control', 'id' => 'TONumber']) !!}
        </div>
    </div>
</div>


<!-- Quotation Number Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('QuotationNo', 'Quotation Number:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('QuotationNo', array_keys($quotationItemsByTONumber), null, ['class' => 'form-control', 'id' => 'QuotationNo']) !!}
        </div>
    </div>
</div>


<!-- TotalAmount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TotalAmount', 'Total Amount:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('TotalAmount', null, ['class' => 'form-control', 'id' => 'TotalAmount', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>

<script>
    // Get references to the select field and the TotalAmount input field
    var quotationNoSelect = document.getElementById('QuotationNo');
    var totalAmountInput = document.getElementById('TotalAmount');

    // Add event listener for changes in the QuotationNo select field
    quotationNoSelect.addEventListener('change', function() {
        // Get the selected QuotationNo
        var selectedQuotationNo = quotationNoSelect.value;

        // Check if the selected QuotationNo exists in the quotationItemsByTONumber array
        if (selectedQuotationNo && selectedQuotationNo in {!! json_encode($quotationItemsByTONumber) !!}) {
            // If it exists, update the TotalAmount field with the corresponding total amount
            totalAmountInput.value = {!! json_encode($quotationItemsByTONumber) !!}[selectedQuotationNo][0]['TotalAmount'];
        } else {
            // If it doesn't exist or no QuotationNo is selected, reset the TotalAmount field
            totalAmountInput.value = '';
        }
    });
</script>




<!-- Suppliername Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SupplierName', 'Suppliername:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('SupplierName', $suppliersData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>




<!-- Description Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('Description', 'Description:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('Description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>







<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('localPOs.index') }}" class="btn btn-default">Cancel</a>
</div>

{{-- <!-- Form to select TONumber -->
<form method="POST">
    @csrf
    <div class="form-group">
        <label for="TONumber">Select TONumber:</label>
        <select name="TONumber" id="TONumber" class="form-control">
            <option value="">Select TONumber</option>
            @foreach ($quotationItemsByTONumber as $TONumber => $items)
                <option value="{{ $TONumber }}">{{ $TONumber }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- Table with items associated with the selected TONumber -->
@if (isset($selectedTONumber))
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quotationItemsByTONumber[$selectedTONumber] as $item)
                <tr>
                    <td>{{ $item['ItemName'] }}</td>
                    <td>{{ $item['Quantity'] }}</td>
                    <td>{{ $item['TotalAmount'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}


    <!-- Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Date', 'Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
        </div>
    </div>
</div>

@endif
