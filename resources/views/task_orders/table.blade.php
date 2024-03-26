<div class="table-responsive">
    <table class="table" id="taskOrders-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>TO Number</th>
        <th>Description</th>
        <th>Contract No</th>
        <th>TOP No:</th>
        <th>Location</th>
        <th>To Amount</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($taskOrders as $taskOrders)
            <tr>
                <td>{{ $taskOrders->id }}</td>
            <td><a href="{{ route('taskOrders.show', [$taskOrders->id]) }}">{{ $taskOrders->TONumber }}</a></td>
            <td>{{ strlen($taskOrders->Todescription) > 100 ? substr($taskOrders->Todescription, 0, 100) . '...' : $taskOrders->Todescription }}</td>
            <td>{{ $taskOrders->ContractNo }}</td>
            <td>{{ $taskOrders->Topnumber }}</td>
            <td>{{ $taskOrders->Location }}</td>
            <td>{{ $taskOrders->TOAmount }}</td>
                <td>
                    {!! Form::open(['route' => ['taskOrders.destroy', $taskOrders->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('taskOrders.show', [$taskOrders->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('taskOrders.edit', [$taskOrders->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
