<!-- Tonumber Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('TONumber', 'Tonumber:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('TONumber', $taskOrderData, null, ['class' => 'form-control', 'id' => 'TONumber']) !!}
        </div>
    </div>
</div>




<!-- Itemname Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('ItemName', 'Itemname:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('ItemName', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Unitofmeasurement Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('UnitofMeasurement', 'Unitofmeasurement:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('UnitofMeasurement', [
                'Bags' => 'Bags',
                'Boxes' => 'Boxes',
                'CUM' => 'CUM',
                'KGs' => 'KGs',
                'Pairs' => 'Pairs',
                'Pieces' => 'Pieces',
                'Tones' => 'Tones',
                'Trips' => 'Trips'
            ], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Quantity Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Quantity', 'Quantity:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('Quantity', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


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


<!-- Requestedby Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('RequestedBy', 'Requested by:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('RequestedBy', $projectManagersData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tOMaterials.index') }}" class="btn btn-default">Cancel</a>
</div>
