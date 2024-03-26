<div class="table-responsive">
    <table class="table" id="generalExpenses-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Expensename</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($generalExpenses as $generalExpenses)
            <tr>
                <td>{{ $generalExpenses->id }}</td>
            <td>{{ $generalExpenses->ExpenseName }}</td>
            <td>{{ $generalExpenses->Amount }}</td>
            <td>{{ $generalExpenses->Date }}</td>
            <td>{{ $generalExpenses->created_at }}</td>
            <td>{{ $generalExpenses->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['generalExpenses.destroy', $generalExpenses->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('generalExpenses.show', [$generalExpenses->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('generalExpenses.edit', [$generalExpenses->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
