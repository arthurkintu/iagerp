<!-- Generalexpenses Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('GeneralExpenses', 'Generalexpenses:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('GeneralExpenses', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Supplierexpenses Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SupplierExpenses', 'Supplierexpenses:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('SupplierExpenses', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Subcontractorexpenses Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SubcontractorExpenses', 'Subcontractorexpenses:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('SubcontractorExpenses', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Payroll Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Payroll', 'Payroll:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('Payroll', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Pettycashbalance Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('PettyCashBalance', 'Pettycashbalance:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('PettyCashBalance', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('expenseTrackers.index') }}" class="btn btn-default">Cancel</a>
</div>
