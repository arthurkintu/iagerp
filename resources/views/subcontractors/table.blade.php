<div class="table-responsive">
    <table class="table" id="subcontractors-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Subconname</th>
        <th>Subconnamebalance</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subcontractors as $subcontractors)
            <tr>
                <td>{{ $subcontractors->id }}</td>
            <td>{{ $subcontractors->SubConName }}</td>
            <td>{{ $subcontractors->SubConNameBalance }}</td>
            <td>{{ $subcontractors->created_at }}</td>
            <td>{{ $subcontractors->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['subcontractors.destroy', $subcontractors->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subcontractors.show', [$subcontractors->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('subcontractors.edit', [$subcontractors->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
