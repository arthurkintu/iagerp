<div class="table-responsive">
    <table class="table" id="contracts-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Contractno</th>
        <th>Client</th>
        <th>Startdate</th>
        <th>Contractamount</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contracts as $contracts)
            <tr>
                <td>{{ $contracts->id }}</td>
            <td>{{ $contracts->ContractNo }}</td>
            <td>{{ $contracts->Client }}</td>
            <td>{{ $contracts->StartDate }}</td>
            <td>{{ $contracts->ContractAmount }}</td>
            <td>{{ $contracts->created_at }}</td>
            <td>{{ $contracts->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['contracts.destroy', $contracts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contracts.show', [$contracts->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('contracts.edit', [$contracts->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
