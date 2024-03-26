<!-- Suppliername Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Suppliername', 'Suppliername:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('Suppliername', $suppliersData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Quotation Number Field -->
<div class="form-group">
    <div class="row">
        <label for="Quotations" class="col-md-3 col-lg-3 col-12 control-label">Quotation Number:</label>
        <div class="col-md-9 col-lg-9 col-12">
            <select name="Quotations" id="Quotations" class="form-control">
                @foreach ($quotationItemsByTONumber as $TONumber => $items)
                    <optgroup label="TONumber: {{ $TONumber }}">
                        @foreach ($items as $item)
                            <option value="{{ $item['QuotationNumber'] }}">{{ $item['QuotationNumber'] }}</option>
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>
    </div>
</div>



<!-- Grnphysicalcopy Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('GRNphysicalcopy', 'Grnphysicalcopy:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('GRNphysicalcopy') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Grncomments Field -->
<div class="form-group">
    <div class="row">
        <label for="GRNcomments" class="col-md-3 col-lg-3 col-12 control-label">Grncomments:</label>
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('GRNcomments', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('gRNS.index') }}" class="btn btn-default">Cancel</a>
</div>
