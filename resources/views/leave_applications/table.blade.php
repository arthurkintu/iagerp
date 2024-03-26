<div class="table-responsive">
    <table class="table" id="leaveApplications-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Applicationdate</th>
        <th>Startdate</th>
        <th>Enddate</th>
        <th>Telephone</th>
        <th>Delegated</th>
        <th>Remarks</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leaveApplications as $leaveApplication)
            <tr>
                <td>{{ $leaveApplication->id }}</td>
            <td>{{ $leaveApplication->Name }}</td>
            <td>{{ $leaveApplication->ApplicationDate }}</td>
            <td>{{ $leaveApplication->StartDate }}</td>
            <td>{{ $leaveApplication->EndDate }}</td>
            <td>{{ $leaveApplication->Telephone }}</td>
            <td>{{ $leaveApplication->Delegated }}</td>
            <td>{{ $leaveApplication->Remarks }}</td>
            <td>{{ $leaveApplication->created_at }}</td>
            <td>{{ $leaveApplication->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['leaveApplications.destroy', $leaveApplication->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('leaveApplications.show', [$leaveApplication->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('leaveApplications.edit', [$leaveApplication->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
