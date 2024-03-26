<div class="table-responsive">
    <table class="table" id="purchaseOrders-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Tonumber</th>
        <th>Quotationno</th>
        <th>Suppliername</th>
        <th>Totalamount</th>
        <th>Description</th>
        <th>Date</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($purchaseOrders as $purchaseOrders)
            <tr>
                <td>{{ $purchaseOrders->id }}</td>
            <td>{{ $purchaseOrders->TONumber }}</td>
            <td>{{ $purchaseOrders->QuotationNo }}</td>
            <td>{{ $purchaseOrders->SupplierName }}</td>
            <td>{{ $purchaseOrders->TotalAmount }}</td>
            <td>{{ $purchaseOrders->Description }}</td>
            <td>{{ $purchaseOrders->Date }}</td>
            <td>{{ $purchaseOrders->created_at }}</td>
            <td>{{ $purchaseOrders->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['purchaseOrders.destroy', $purchaseOrders->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('purchaseOrders.show', [$purchaseOrders->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('purchaseOrders.edit', [$purchaseOrders->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
