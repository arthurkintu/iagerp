<div class="table-responsive">
    <table class="table" id="locations-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Locationname</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($locations as $locations)
            <tr>
                <td>{{ $locations->id }}</td>
            <td>{{ $locations->LocationName }}</td>
            <td>{{ $locations->created_at }}</td>
            <td>{{ $locations->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['locations.destroy', $locations->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('locations.show', [$locations->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('locations.edit', [$locations->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
