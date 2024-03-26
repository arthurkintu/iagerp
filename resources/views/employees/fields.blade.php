<!-- Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Name', 'Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Email Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Email', 'Email:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::email('Email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Phone Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Phone', 'Phone:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Phone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Department Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Department', 'Department:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('Department', ['Engineering' => 'Engineering', 'Finance' => 'Finance', 'Administration' => 'Administration', 'ICT' => 'ICT'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Nationality Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Nationality', 'Nationality:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('Nationality', ['Somali' => 'Somali', 'Kenyan' => 'Kenyan', 'Ugandan' => 'Ugandan', 'Ethiopian' => 'Ethiopian', 'Pakistani' => 'Pakistani'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Passportexpiry Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('PassportExpiry', 'Passportexpiry:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('PassportExpiry', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Visaexpiry Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('VisaExpiry', 'Visaexpiry:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('VisaExpiry', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Photo Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Photo', 'Photo:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Photo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Jobtitle Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('JobTitle', 'Jobtitle:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('JobTitle', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Passportnumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('PassportNumber', 'Passportnumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('PassportNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Gender Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Gender', 'Gender:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('Gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Uploadcv Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('UploadCV', 'Uploadcv:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('UploadCV') !!}
        </div>
    </div>
</div <div class="clearfix">
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
    <a href="{{ route('employees.index') }}" class="btn btn-default">Cancel</a>
</div>
