<!-- Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Name', 'Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Amountrequested Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('AmountRequested', 'Amountrequested:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('AmountRequested', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Date', 'Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Date', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('advancePayments.index') }}" class="btn btn-default">Cancel</a>
</div>
