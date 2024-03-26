<div class="table-responsive">
    <table class="table" id="customerInvoices-table">
        <thead>
            <tr>
        <th>TO Number</th>
        <th>TO Amount</th>
        <th>Invoice %</th>
        <th>Invoice Group</th>
        <th>Status</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Invoice No:</th>
        <th>Contract No:</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customerInvoices as $customerInvoices)
            <tr>
            <td>{{ $customerInvoices->TONumber }}</td>
            <td>{{ $customerInvoices->TOAmount }}</td>
            <td>{{ $customerInvoices->InvoicePercentage }}</td>
            <td>{{ $customerInvoices->InvoiceGroup }}</td>
            <td>{{ $customerInvoices->InvoiceStatus }}</td>
            <td>{{ $customerInvoices->InvoiceDate }}</td>
            <td>{{ $customerInvoices->InvoiceAmount }}</td>
            <td>{{ $customerInvoices->InvoiceNumber }}</td>
            <td>{{ $customerInvoices->ContractNumber }}</td>

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
