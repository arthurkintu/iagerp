<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONumber', $taskOrderData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div

<!-- Suppliername Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SupplierName', 'Suppliername:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('SupplierName', $suppliersData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Amount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Amount', 'Amount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('Amount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Receiptnumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ReceiptNumber', 'Receiptnumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ReceiptNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Attachevidence Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('AttachEvidence', 'Attachevidence:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('AttachEvidence') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Paymentdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('PaymentDate', 'Payment Date:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('PaymentDate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>





<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('supplierCashiers.index') }}" class="btn btn-default">Cancel</a>
</div>
