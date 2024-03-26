<!-- Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Name', 'Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div

<!-- Applicationdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ApplicationDate', 'Applicationdate:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('ApplicationDate', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'ApplicationDate']) !!}
        </div>
    </div>
</div>

<!-- Startdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('StartDate', 'Startdate:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('StartDate', null, ['class' => 'form-control', 'id' => 'StartDate']) !!}
        </div>
    </div>
</div>

<!-- Enddate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('EndDate', 'Enddate:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('EndDate', null, ['class' => 'form-control', 'id' => 'EndDate']) !!}
        </div>
    </div>
</div>



<!-- Telephone Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Telephone', 'Telephone:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Telephone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Delegated Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Delegated', 'Delegated:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Delegated', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Remarks Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('Remarks', 'Remarks:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('Remarks', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('leaveApplications.index') }}" class="btn btn-default">Cancel</a>
</div>
