<!-- Clientname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ClientName', 'Clientname:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ClientName', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Location Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Location', 'Location:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Location', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-default">Cancel</a>
</div>
