<!-- Contractno Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ContractNo', 'Contractno:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ContractNo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TONumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Referenceno Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ReferenceNo', 'Referenceno:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ReferenceNo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Paymentdocumentno Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('PaymentDocumentNo', 'Paymentdocumentno:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('PaymentDocumentNo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Digitalcopy Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('DigitalCopy', 'Digitalcopy:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('DigitalCopy') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Invoiceamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('InvoiceAmount', 'Invoiceamount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('InvoiceAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Totalpaid Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TotalPaid', 'Totalpaid:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('TotalPaid', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Bank Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Bank', 'Bank:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Bank', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Paymentmethod Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('PaymentMethod', 'Paymentmethod:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('PaymentMethod', ['Remittence Transfer' => 'Remittence Transfer'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('receivePayments.index') }}" class="btn btn-default">Cancel</a>
</div>
