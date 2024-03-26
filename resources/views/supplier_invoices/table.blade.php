<div class="table-responsive">
    <table class="table" id="supplierInvoices-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Supplierinvoicenumber</th>
        <th>Lponumber</th>
        <th>Description</th>
        <th>Supplieditems</th>
        <th>Lpoamount</th>
        <th>Suppliername</th>
        <th>Date</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($supplierInvoices as $supplierInvoices)
            <tr>
                <td>{{ $supplierInvoices->id }}</td>
            <td>{{ $supplierInvoices->SupplierInvoiceNumber }}</td>
            <td>{{ $supplierInvoices->LpoNumber }}</td>
            <td>{{ $supplierInvoices->Description }}</td>
            <td>{{ $supplierInvoices->SuppliedItems }}</td>
            <td>{{ $supplierInvoices->LpoAmount }}</td>
            <td>{{ $supplierInvoices->SupplierName }}</td>
            <td>{{ $supplierInvoices->Date }}</td>
            <td>{{ $supplierInvoices->created_at }}</td>
            <td>{{ $supplierInvoices->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['supplierInvoices.destroy', $supplierInvoices->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('supplierInvoices.show', [$supplierInvoices->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('supplierInvoices.edit', [$supplierInvoices->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
