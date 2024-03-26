<div class="row">
    <!-- First Column -->
    <div class="col-md-6">
        <!-- Tonumber Field -->
        <div class="form-group">
            {!! Form::label('TONumber', 'Tonumber:', ['class' => 'control-label']) !!}
            {!! Form::text('TONumber', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Todescription Field -->
        <div class="form-group">
            {!! Form::label('Todescription', 'TO Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('Todescription', null, ['class' => 'form-control', 'rows' => 3]) !!}
        </div>

<!-- Contractno Field -->
<div class="form-group">
    {!! Form::label('ContractNo', 'Contract No:', ['class' => 'control-label']) !!}
    {!! Form::select('ContractNo', $contracts->pluck('ContractNo', 'ContractNo'), null, ['class' => 'form-control']) !!}
</div>


        <!-- Topnumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Topnumber', 'TOP Number:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
        {!! Form::select('Topnumber', $taskOrderProposals, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

        <!-- Wbsenumber Field -->
        <div class="form-group">
            {!! Form::label('Wbsenumber', 'WBSE Number:', ['class' => 'control-label']) !!}
            {!! Form::text('Wbsenumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <!-- Second Column -->
    <div class="col-md-6">
        <!-- Pm Field -->
        <div class="form-group">
            {!! Form::label('PM', 'Pm:', ['class' => 'control-label']) !!}
            {!! Form::select('PM', $projectManagers->pluck('Name', 'id'), null, ['class' => 'form-control']) !!}
        </div>

        <!-- Location Field -->
        <div class="form-group">
            {!! Form::label('Location', 'Location:', ['class' => 'control-label']) !!}
            {!! Form::select('Location', $locations->pluck('LocationName', 'LocationName'), null, ['class' => 'form-control']) !!}
        </div>

        <!-- Startdate Field -->
        <div class="form-group">
            {!! Form::label('Startdate', 'Startdate:', ['class' => 'control-label']) !!}
            {!! Form::date('Startdate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>

        <!-- Completiondate Field -->
        <div class="form-group">
            {!! Form::label('CompletionDate', 'Completiondate:', ['class' => 'control-label']) !!}
            {!! Form::date('CompletionDate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>

        <!-- Approvaldate Field -->
        <div class="form-group">
            {!! Form::label('ApprovalDate', 'Approvaldate:', ['class' => 'control-label']) !!}
            {!! Form::date('ApprovalDate', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>

        <!-- Uniquenumber Field -->
        <div class="form-group">
            {!! Form::label('UniqueNumber', 'Uniquenumber:', ['class' => 'control-label']) !!}
            {!! Form::text('UniqueNumber', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Toamount Field -->
        <div class="form-group">
            {!! Form::label('TOAmount', 'Toamount:', ['class' => 'control-label']) !!}
            {!! Form::number('TOAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('taskOrders.index') }}" class="btn btn-default">Cancel</a>
</div>
