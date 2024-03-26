<div class="table-responsive">
    <table class="table" id="subContractorTrackers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Subconname</th>
        <th>Taskorder</th>
        <th>Subcontractorfee</th>
        <th>Subconpaymentstatus</th>
        <th>Contractno</th>
        <th>Tonumber</th>
        <th>Subcontractordocument</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subContractorTrackers as $subContractorTracker)
            <tr>
                <td>{{ $subContractorTracker->id }}</td>
            <td>{{ $subContractorTracker->Subconname }}</td>
            <td>{{ $subContractorTracker->Taskorder }}</td>
            <td>{{ $subContractorTracker->SubContractorFee }}</td>
            <td>{{ $subContractorTracker->SubconPaymentStatus }}</td>
            <td>{{ $subContractorTracker->Contractno }}</td>
            <td>{{ $subContractorTracker->Tonumber }}</td>
            <td>{{ $subContractorTracker->Subcontractordocument }}</td>
            <td>{{ $subContractorTracker->created_at }}</td>
            <td>{{ $subContractorTracker->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['subContractorTrackers.destroy', $subContractorTracker->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subContractorTrackers.show', [$subContractorTracker->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('subContractorTrackers.edit', [$subContractorTracker->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
