<!-- Supplierinvoicenumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SupplierInvoiceNumber', 'Supplierinvoicenumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('SupplierInvoiceNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Lponumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('LpoNumber', 'Lponumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('LpoNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Description Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Description', 'Description:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Supplieditems Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SuppliedItems', 'Supplieditems:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('SuppliedItems', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Lpoamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('LpoAmount', 'Lpoamount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('LpoAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Suppliername Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SupplierName', 'Suppliername:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('SupplierName', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Date', 'Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('supplierInvoices.index') }}" class="btn btn-default">Cancel</a>
</div>
