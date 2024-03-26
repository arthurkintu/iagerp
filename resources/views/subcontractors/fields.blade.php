<!-- Subconname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubConName', 'Subconname:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('SubConName', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Subconnamebalance Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubConNameBalance', 'Subconnamebalance:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('SubConNameBalance', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('subcontractors.index') }}" class="btn btn-default">Cancel</a>
</div>
