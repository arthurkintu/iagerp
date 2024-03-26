<div class="table-responsive">
    <table class="table" id="banks-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Bankname</th>
        <th>Bankaccount</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($banks as $banks)
            <tr>
                <td>{{ $banks->id }}</td>
            <td>{{ $banks->BankName }}</td>
            <td>{{ $banks->BankAccount }}</td>
            <td>{{ $banks->created_at }}</td>
            <td>{{ $banks->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['banks.destroy', $banks->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('banks.show', [$banks->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('banks.edit', [$banks->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
