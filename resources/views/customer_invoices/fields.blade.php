<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONumber', $taskOrders, null, ['class' => 'form-control', 'id' => 'TONumber']) !!}
        </div>
    </div>
</div>

<!-- Toamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOAmount', 'TO Amount:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('TOAmount', null, ['class' => 'form-control', 'id' => 'TOAmount', 'readonly' => true]) !!}
        </div>
    </div>
</div>

<script>
    // Listen for changes in TONumber select field
    document.getElementById('TONumber').addEventListener('change', function() {
        var selectedTONumber = this.value;
        
        // Send AJAX request to fetch TOAmount based on selected TONumber
        fetch('/fetch-toamount', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ tonumber: selectedTONumber })
        })
        .then(response => response.json())
        .then(data => {
            // Update TOAmount field with the fetched value
            document.getElementById('TOAmount').value = data.TOAmount;
        })
        .catch(error => console.error('Error:', error));
    });
</script>


<!-- Invoiceamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('InvoiceAmount', 'Invoice Amount:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('InvoiceAmount', null, ['class' => 'form-control', 'id' => 'InvoiceAmount']) !!}
        </div>
    </div>
</div>

<!-- Invoicepercentage Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('InvoicePercentage', 'Invoice Percentage:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('InvoicePercentage', null, ['class' => 'form-control', 'id' => 'InvoicePercentage', 'readonly' => true]) !!}
        </div>
    </div>
</div>

<script>
    // Function to calculate the Invoice Percentage
    function calculateInvoicePercentage() {
        var invoiceAmount = parseFloat(document.getElementById('InvoiceAmount').value);
        var toAmount = parseFloat(document.getElementById('TOAmount').value);

        // Calculate the Invoice Percentage
        var invoicePercentage = (invoiceAmount / toAmount) * 100;

        // Update the Invoice Percentage field with the calculated value
        document.getElementById('InvoicePercentage').value = invoicePercentage.toFixed(2);
    }

    // Attach an event listener to the Invoice Amount field
    document.getElementById('InvoiceAmount').addEventListener('input', calculateInvoicePercentage);
</script>


<!-- Invoicegroup Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('InvoiceGroup', 'Invoicegroup:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('InvoiceGroup', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Invoicestatus Field -->

<div class="form-group">
    <div class="row">
        {!! Form::label('InvoiceStatus', 'Invoicestatus:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('InvoiceStatus', ['PM' => 'PM', 'RCSE' => 'RCSE', 'Paid' => 'Paid'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Invoicedate Field -->

<div class="form-group">
    <div class="row">
        {!! Form::label('InvoiceDate', 'Invoicedate:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('InvoiceDate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>




<!-- Invoicenumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('InvoiceNumber', 'Invoicenumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('InvoiceNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Contractnumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ContractNumber', 'Contract Number:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('ContractNumber', [
                'UNSOS/CON/23/013' => 'UNSOS/CON/23/013',
                'UNSOS/COM/20/006' => 'UNSOS/COM/20/006',
                'UNSOS/CON/19/013' => 'UNSOS/CON/19/013',
            ], null, ['class' => 'form-control', 'id' => 'contractnumber']) !!}
        </div>
    </div>
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('customerInvoices.index') }}" class="btn btn-default">Cancel</a>
</div>
