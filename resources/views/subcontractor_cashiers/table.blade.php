<div class="table-responsive">
    <table class="table" id="subcontractorCashiers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Subcontractorname</th>
        <th>Tonumber</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subcontractorCashiers as $subcontractorCashiers)
            <tr>
                <td>{{ $subcontractorCashiers->id }}</td>
            <td>{{ $subcontractorCashiers->SubcontractorName }}</td>
            <td>{{ $subcontractorCashiers->TONumber }}</td>
            <td>{{ $subcontractorCashiers->Amount }}</td>
            <td>{{ $subcontractorCashiers->Date }}</td>
            <td>{{ $subcontractorCashiers->created_at }}</td>
            <td>{{ $subcontractorCashiers->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['subcontractorCashiers.destroy', $subcontractorCashiers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subcontractorCashiers.show', [$subcontractorCashiers->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('subcontractorCashiers.edit', [$subcontractorCashiers->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
