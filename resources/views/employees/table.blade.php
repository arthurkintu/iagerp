<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Passport Expiry</th>
        <th>Visa Expiry</th>
        <th>Job Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employees)
            <tr>
                <td>{{ $employees->id }}</td>
            <td>{{ $employees->Name }}</td>
            <td>{{ $employees->daysUntilPassportExpiry() }}</td>
            <td>{{ $employees->daysUntilVisaExpiry() }}</td>
            <td>{{ $employees->JobTitle }}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employees->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employees->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('employees.edit', [$employees->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
