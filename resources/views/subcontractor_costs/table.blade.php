<div class="table-responsive">
    <table class="table" id="subcontractorCosts-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Subcontractorname</th>
        <th>Tonumber</th>
        <th>Subconcontractamount</th>
        <th>Startdate</th>
        <th>Uploadcontract</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subcontractorCosts as $subcontractorCosts)
            <tr>
                <td>{{ $subcontractorCosts->id }}</td>
            <td>{{ $subcontractorCosts->SubcontractorName }}</td>
            <td>{{ $subcontractorCosts->TONumber }}</td>
            <td>{{ $subcontractorCosts->SubConContractAmount }}</td>
            <td>{{ $subcontractorCosts->StartDate }}</td>
            <td>{{ $subcontractorCosts->UploadContract }}</td>
            <td>{{ $subcontractorCosts->created_at }}</td>
            <td>{{ $subcontractorCosts->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['subcontractorCosts.destroy', $subcontractorCosts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subcontractorCosts.show', [$subcontractorCosts->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('subcontractorCosts.edit', [$subcontractorCosts->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
