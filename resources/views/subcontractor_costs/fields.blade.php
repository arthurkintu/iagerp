<!-- Subcontractor Select Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubcontractorName', 'SubcontractorName:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('SubcontractorName', $subcontractorsData, null, ['class' => 'form-control', 'id' => 'SubcontractorName', 'placeholder' => 'Select Subcontractor']) !!}
        </div>
    </div>
</div>



<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONumber', $taskOrderData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Subconcontractamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubConContractAmount', 'Subconcontractamount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('SubConContractAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Startdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('StartDate', 'Startdate:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('StartDate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>




<!-- Uploadcontract Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('UploadContract', 'Uploadcontract:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('UploadContract') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('subcontractorCosts.index') }}" class="btn btn-default">Cancel</a>
</div>
