<!-- Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Name', 'Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Salary Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Salary', 'Salary:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Salary', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Deductions Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Deductions', 'Deductions:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Deductions', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Daysofattendance Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('DaysofAttendance', 'Days of Attendance:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('DaysofAttendance', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Advancepayments Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('AdvancePayments', 'Advance Payments:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('AdvancePayments', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('payrolls.index') }}" class="btn btn-default">Cancel</a>
</div>
