<!-- Bankname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('BankName', 'Bankname:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('BankName', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Bankaccount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('BankAccount', 'Bankaccount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('BankAccount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('banks.index') }}" class="btn btn-default">Cancel</a>
</div>
