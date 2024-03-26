<div class="table-responsive">
    <table class="table" id="taskOrderCosts-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Tonumber</th>
        <th>Quotationnumber</th>
        <th>Itemname</th>
        <th>Itemunit</th>
        <th>Totalamount</th>
        <th>Quantity</th>
        <th>Unitprice</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($taskOrderCosts as $taskOrderCosts)
            <tr>
                <td>{{ $taskOrderCosts->id }}</td>
            <td>{{ $taskOrderCosts->TONumber }}</td>
            <td>{{ $taskOrderCosts->QuotationNumber }}</td>
            <td>{{ $taskOrderCosts->ItemName }}</td>
            <td>{{ $taskOrderCosts->ItemUnit }}</td>
            <td>{{ $taskOrderCosts->TotalAmount }}</td>
            <td>{{ $taskOrderCosts->Quantity }}</td>
            <td>{{ $taskOrderCosts->UnitPrice }}</td>
            <td>{{ $taskOrderCosts->created_at }}</td>
            <td>{{ $taskOrderCosts->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['taskOrderCosts.destroy', $taskOrderCosts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('taskOrderCosts.show', [$taskOrderCosts->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('taskOrderCosts.edit', [$taskOrderCosts->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
