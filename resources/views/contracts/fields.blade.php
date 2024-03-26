<!-- Contractno Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ContractNo', 'Contractno:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ContractNo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Client Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Client', 'Client:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Client', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Startdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('StartDate', 'Startdate:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('StartDate', null, ['class' => 'form-control','id'=>'StartDate']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#StartDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Contractamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ContractAmount', 'Contractamount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('ContractAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contracts.index') }}" class="btn btn-default">Cancel</a>
</div>
