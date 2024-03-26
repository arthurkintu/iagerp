<div class="table-responsive">
    <table class="table" id="suppliers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Suppliername</th>
        <th>Location</th>
        <th>Suppliercontact</th>
        <th>Supplierbalance</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $suppliers)
            <tr>
                <td>{{ $suppliers->id }}</td>
            <td>{{ $suppliers->SupplierName }}</td>
            <td>{{ $suppliers->Location }}</td>
            <td>{{ $suppliers->SupplierContact }}</td>
            <td>{{ $suppliers->SupplierBalance }}</td>
            <td>{{ $suppliers->created_at }}</td>
            <td>{{ $suppliers->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['suppliers.destroy', $suppliers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('suppliers.show', [$suppliers->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('suppliers.edit', [$suppliers->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
