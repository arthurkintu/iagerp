<!-- TONumber Field -->
<div class="form-group">
    <div class="row">
        <label for="TONumber" class="col-md-3 col-lg-3 col-12 control-label">TONumber:</label>
        <div class="col-md-9 col-lg-9 col-12">
            <select name="TONumber" id="TONumber" class="form-control">
                @foreach ($taskOrdersByTONumber as $TONumber => $taskOrders)
                    <option value="{{ $TONumber }}">{{ $TONumber }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<!-- TODescription Field -->
<div class="form-group">
    <div class="row">
        <label for="TODescription" class="col-md-3 col-lg-3 col-12 control-label">TODescription:</label>
        <div class="col-md-9 col-lg-9 col-12">
            <input type="text" name="TODescription" id="TODescription" class="form-control" readonly>
        </div>
    </div>
</div>

<!-- TOAmount Field -->
<div class="form-group">
    <div class="row">
        <label for="TOAmount" class="col-md-3 col-lg-3 col-12 control-label">TO Amount:</label>
        <div class="col-md-9 col-lg-9 col-12">
            <input type="text" name="TOAmount" id="TOAmount" class="form-control" readonly>
        </div>
    </div>
</div>

<!-- Location Field -->
<div class="form-group">
    <div class="row">
        <label for="Location" class="col-md-3 col-lg-3 col-12 control-label">Location:</label>
        <div class="col-md-9 col-lg-9 col-12">
            <input type="text" name="Location" id="Location" class="form-control" readonly>
        </div>
    </div>
</div>




<!-- Topercetange Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOPercetange', 'TO Percetange:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TOPercetange', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Invoicestatus Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('InvoiceStatus', 'Invoice Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('InvoiceStatus', ['PM' => 'PM', 'RCSE' => 'RCSE', 'PAID' => 'PAID'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Remainingbalance Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('RemainingBalance', 'Remaining Balance:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('RemainingBalance', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Invoicegroup Field -->
<div class="form-group">
    <div class="row">
        <label for="InvoiceGroup" class="col-md-3 col-lg-3 col-12 control-label">Invoice Group:</label>
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('InvoiceGroup', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Receiptno Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ReceiptNo', 'Receipt No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ReceiptNo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Paidamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('PaidAmount', 'Paid Amount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('PaidAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Bankname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('BankName', 'Bank Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('BankName', ['Salama Bank' => 'Salama Bank'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Budgetbalance Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('BudgetBalance', 'Budget Balance:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('BudgetBalance', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('invoiceTrackers.index') }}" class="btn btn-default">Cancel</a>
</div>



<script>
    document.getElementById('TONumber').addEventListener('change', function() {
        var selectedTONumber = this.value;
        var taskOrders = @json($taskOrdersByTONumber);

        // Find the corresponding task order and update the fields
        var selectedTaskOrder = taskOrders[selectedTONumber][0]; // Assuming only one task order per TONumber
        document.getElementById('TODescription').value = selectedTaskOrder['TODescription'];
        document.getElementById('TOAmount').value = selectedTaskOrder['TOAmount'];
        document.getElementById('Location').value = selectedTaskOrder['Location'];
    });
</script>
