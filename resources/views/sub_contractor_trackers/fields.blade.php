<!-- Subconname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Subconname', 'Subconname:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('Subconname', ['Subconname Mubarak' => 'Subconname Mubarak'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Taskorder Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Taskorder', 'Taskorder:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('Taskorder', ['TOGBAG039' => 'TOGBAG039'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Subcontractorfee Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubContractorFee', 'Subcontractorfee:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('SubContractorFee', ['' => ''], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Subconpaymentstatus Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubconPaymentStatus', 'Subconpaymentstatus:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('SubconPaymentStatus', ['Paid' => 'Paid'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Contractno Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Contractno', 'Contractno:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Contractno', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Tonumber', 'Tonumber:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('Tonumber', ['TonumberSelect' => 'TonumberSelect'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Subcontractordocument Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Subcontractordocument', 'Subcontractordocument:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('Subcontractordocument') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('subContractorTrackers.index') }}" class="btn btn-default">Cancel</a>
</div>
