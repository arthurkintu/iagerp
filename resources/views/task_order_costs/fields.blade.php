<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TONumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Quotationnumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('QuotationNumber', 'Quotationnumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('QuotationNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Itemname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ItemName', 'Itemname:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ItemName', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Itemunit Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ItemUnit', 'Itemunit:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ItemUnit', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Totalamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TotalAmount', 'Totalamount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TotalAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Quantity Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Quantity', 'Quantity:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Quantity', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Unitprice Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('UnitPrice', 'Unitprice:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('UnitPrice', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('taskOrderCosts.index') }}" class="btn btn-default">Cancel</a>
</div>
