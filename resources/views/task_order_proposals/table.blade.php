<div class="table-responsive">
    <table class="table" id="taskOrderProposals-table">
        <thead>
            <tr>
        <th>Topnumber</th>
        <th>Toptitle</th>
        <th>Location</th>
        <th>Topdocuments</th>
        <th>Submissiondate</th>
        <th>Topdescription</th>
        <th>Topamount</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($taskOrderProposals as $taskOrderProposals)
            <tr>
            <td>{{ $taskOrderProposals->TOPNumber }}</td>
            <td>{{ $taskOrderProposals->TOPTitle }}</td>
            <td>{{ $taskOrderProposals->Location }}</td>
            <td>{{ $taskOrderProposals->TOPDocuments }}</td>
            <td>{{ $taskOrderProposals->SubmissionDate }}</td>
            <td>{{ $taskOrderProposals->TOPDescription }}</td>
            <td>{{ $taskOrderProposals->TOPAmount }}</td>
                <td>
                    {!! Form::open(['route' => ['taskOrderProposals.destroy', $taskOrderProposals->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('taskOrderProposals.show', [$taskOrderProposals->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('taskOrderProposals.edit', [$taskOrderProposals->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
