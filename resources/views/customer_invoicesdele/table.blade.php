<div class="table-responsive">
    <table class="table" id="customerInvoices-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Invoicenumber</th>
        <th>Tonumber</th>
        <th>Toamount</th>
        <th>Invoicepercentage</th>
        <th>Invoicegroup</th>
        <th>Invoicestatus</th>
        <th>Invoicedate</th>
        <th>Invoiceamount</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customerInvoices as $customerInvoices)
            <tr>
                <td>{{ $customerInvoices->id }}</td>
            <td>{{ $customerInvoices->invoicenumber }}</td>
            <td>{{ $customerInvoices->tonumber }}</td>
            <td>{{ $customerInvoices->toamount }}</td>
            <td>{{ $customerInvoices->invoicepercentage }}</td>
            <td>{{ $customerInvoices->invoicegroup }}</td>
            <td>{{ $customerInvoices->invoicestatus }}</td>
            <td>{{ $customerInvoices->invoicedate }}</td>
            <td>{{ $customerInvoices->invoiceamount }}</td>
            <td>{{ $customerInvoices->created_at }}</td>
            <td>{{ $customerInvoices->updated_at }}</td>
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
