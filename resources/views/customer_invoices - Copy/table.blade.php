<div class="row mb-3">
    <div class="col-md-4">
        {!! Form::text('contract_number', null, ['class' => 'form-control', 'placeholder' => 'Contract Number']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::select('invoice_status', $invoiceStatusOptions, null, ['class' => 'form-control', 'placeholder' => 'Select Invoice Status']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::select('invoice_group', $invoiceGroupOptions, null, ['class' => 'form-control', 'placeholder' => 'Select Invoice Group']) !!}
    </div>
</div>



<div class="table-responsive">
    <table class="table" id="customerInvoices-table">
        <thead>
            <tr>
        <th>Invoicenumber</th>
        <th>Tonumber</th>
        <th>Toamount</th>
        <th>Invoicepercentage</th>
        <th>Invoicegroup</th>
        <th>Invoicestatus</th>
        <th>Invoicedate</th>
        <th>Invoiceamount</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customerInvoices as $customerInvoices)
            <tr>
            <td>    <a href="{{ route('customerInvoices.show', ['customerInvoice' => $customerInvoices->id]) }}">
                {{ $customerInvoices->InvoiceNumber }}
            </a></td>
            <td>{{ $customerInvoices->TONumber }}</td>
            <td>{{ $customerInvoices->TOAmount }}</td>
            <td>{{ $customerInvoices->InvoicePercentage }}</td>
            <td>{{ $customerInvoices->InvoiceGroup }}</td>
            <td>{{ $customerInvoices->InvoiceStatus }}</td>
            <td>{{ $customerInvoices->InvoiceDate }}</td>
            <td>{{ $customerInvoices->InvoiceAmount }}</td>

                <td>
                    {!! Form::open(['route' => ['customerInvoices.destroy', $customerInvoices->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customerInvoices.show', [$customerInvoices->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('customerInvoices.edit', [$customerInvoices->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i></a>
                        {!! Form::button('<i class="im im-icon-Remove"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
