<!-- Expensename Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ExpenseName', 'Expensename:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ExpenseName', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Amount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Amount', 'Amount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Amount', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('generalExpenses.index') }}" class="btn btn-default">Cancel</a>
</div>
