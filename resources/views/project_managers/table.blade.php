<div class="table-responsive">
    <table class="table" id="projectManagers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projectManagers as $projectManagers)
            <tr>
                <td>{{ $projectManagers->id }}</td>
            <td>{{ $projectManagers->Name }}</td>
            <td>{{ $projectManagers->created_at }}</td>
            <td>{{ $projectManagers->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['projectManagers.destroy', $projectManagers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projectManagers.show', [$projectManagers->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('projectManagers.edit', [$projectManagers->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
