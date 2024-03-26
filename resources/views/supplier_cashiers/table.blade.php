<div class="table-responsive">
    <table class="table" id="supplierCashiers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Tonumber</th>
        <th>Suppliername</th>
        <th>Amount</th>
        <th>Receiptnumber</th>
        <th>Attachevidence</th>
        <th>Paymentdate</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($supplierCashiers as $supplierCashier)
            <tr>
                <td>{{ $supplierCashier->id }}</td>
            <td>{{ $supplierCashier->TONumber }}</td>
            <td>{{ $supplierCashier->SupplierName }}</td>
            <td>{{ $supplierCashier->Amount }}</td>
            <td>{{ $supplierCashier->ReceiptNumber }}</td>
            <td>{{ $supplierCashier->AttachEvidence }}</td>
            <td>{{ $supplierCashier->PaymentDate }}</td>
            <td>{{ $supplierCashier->created_at }}</td>
            <td>{{ $supplierCashier->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['supplierCashiers.destroy', $supplierCashier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('supplierCashiers.show', [$supplierCashier->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('supplierCashiers.edit', [$supplierCashier->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
