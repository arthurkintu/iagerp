<!-- Topnumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOPNumber', 'Topnumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TOPNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Toptitle Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOPTitle', 'Toptitle:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TOPTitle', null, ['class' => 'form-control']) !!}
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


<!-- Topdocuments Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOPDocuments', 'Topdocuments:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('TOPDocuments') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Submissiondate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubmissionDate', 'Submissiondate:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('SubmissionDate', null, ['class' => 'form-control','id'=>'SubmissionDate']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#SubmissionDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Topdescription Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOPDescription', 'Topdescription:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('TOPDescription', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Topamount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TOPAmount', 'Topamount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('TOPAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('taskOrderProposals.index') }}" class="btn btn-default">Cancel</a>
</div>
