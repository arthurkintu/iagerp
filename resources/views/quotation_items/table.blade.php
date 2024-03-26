<div class="table-responsive">
    <table class="table" id="quotationItems-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Quotationnumber</th>
        <th>Tonumber</th>
        <th>Itemname</th>
        <th>Itemunit</th>
        <th>Quantity</th>
        <th>Unitprice</th>
        <th>Totalamount</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($quotationItems as $quotationItems)
            <tr>
                <td>{{ $quotationItems->id }}</td>
            <td>{{ $quotationItems->QuotationNumber }}</td>
            <td>{{ $quotationItems->TONumber }}</td>
            <td>{{ $quotationItems->ItemName }}</td>
            <td>{{ $quotationItems->ItemUnit }}</td>
            <td>{{ $quotationItems->Quantity }}</td>
            <td>{{ $quotationItems->UnitPrice }}</td>
            <td>{{ $quotationItems->TotalAmount }}</td>
            <td>{{ $quotationItems->created_at }}</td>
            <td>{{ $quotationItems->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['quotationItems.destroy', $quotationItems->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('quotationItems.show', [$quotationItems->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('quotationItems.edit', [$quotationItems->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
