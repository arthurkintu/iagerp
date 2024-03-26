<!-- Invoicenumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('invoicenumber', 'Invoicevnumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('invoicenumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Invoice Amount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('invoiceamount', 'Invoice Amount:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('invoiceamount', null, ['class' => 'form-control', 'id' => 'InvoiceAmount']) !!}
        </div>
    </div>
</div>


<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONnumber', $taskOrders, null, ['class' => 'form-control', 'id' => 'TONumber']) !!}
        </div>
    </div>
</div>

<!-- Toamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOAmount', 'Toamount:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
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
            document.getElementById('toamount').value = data.toAmount;
        })
        .catch(error => console.error('Error:', error));
    });
</script>


<!-- Invoincepercent Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('invoicepercentage', 'Invoincepercent:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('invoicepercentage', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>




<!-- Invoicegroup Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('invoicegroup', 'Invoicegroup:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('invoicegroup', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Invoicedate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('invoicedate', 'Invoicedate:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('invoicedate', null, ['class' => 'form-control','id'=>'InvoiceDate']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#InvoiceDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', ['Submitted' => 'Submitted'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- PDF Documents Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('pdf_documents', 'PDF Documents:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::file('pdf_documents[]', ['class' => 'form-control', 'multiple' => true]) !!}
            <small class="text-muted">Select multiple PDF documents (optional)</small>
        </div>
    </div>
</div>

<!-- Rest of your form fields -->



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('customerInvoices.index') }}" class="btn btn-default">Cancel</a>
</div>
