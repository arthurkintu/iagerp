<!-- TONumber Field -->
<div class="form-group">
    <label for="TONumber">TONumber:</label>
    <select name="TONumber" id="TONumber" class="form-control">
        @foreach ($quotationItemsByTONumber as $TONumber => $items)
            <option value="{{ $TONumber }}">{{ $TONumber }}</option>
        @endforeach
    </select>
</div>

<!-- Quotation Number Field -->
<div class="form-group">
    <label for="QuotationNo">Quotation Number:</label>
    <select name="QuotationNo" id="QuotationNo" class="form-control">
        @foreach ($quotationItemsByTONumber as $TONumber => $items)
            <optgroup label="TONumber: {{ $TONumber }}">
                @foreach ($items as $item)
                    <option value="{{ $item['QuotationNumber'] }}">{{ $item['QuotationNumber'] }}</option>
                @endforeach
            </optgroup>
        @endforeach
    </select>
</div>

<!-- TotalAmount Field -->
<div class="form-group">
    <label for="TotalAmount">Total Amount:</label>
    <input type="text" name="TotalAmount" id="TotalAmount" class="form-control" readonly>
</div>


<!-- Suppliername Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('SupplierName', 'Suppliername:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('SupplierName', $suppliersData, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- Description Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Description', 'Description:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('Description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<div class="form-group">
    <div class="row">
        {!! Form::label('Date', 'Date:', ['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('Date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('purchaseOrders.index') }}" class="btn btn-default">Cancel</a>
</div>



<script>
    document.getElementById('QuotationNo').addEventListener('change', function() {
        var selectedQuotationNo = this.value;
        var quotationItems = @json($quotationItemsByTONumber);

        // Find the corresponding item and update the TotalAmount field
        for (var TONumber in quotationItems) {
            var items = quotationItems[TONumber];
            for (var i = 0; i < items.length; i++) {
                if (items[i]['QuotationNumber'] === selectedQuotationNo) {
                    document.getElementById('TotalAmount').value = items[i]['TotalAmount'];
                    return;
                }
            }
        }

        // If no matching Quotation Number is found, clear the TotalAmount field
        document.getElementById('TotalAmount').value = '';
    });
</script>