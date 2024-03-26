<div class="table-responsive">
    <table class="table" id="advancePayments-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Amountrequested</th>
        <th>Date</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($advancePayments as $advancePayments)
            <tr>
                <td>{{ $advancePayments->id }}</td>
            <td>{{ $advancePayments->Name }}</td>
            <td>{{ $advancePayments->AmountRequested }}</td>
            <td>{{ $advancePayments->Date }}</td>
            <td>{{ $advancePayments->created_at }}</td>
            <td>{{ $advancePayments->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['advancePayments.destroy', $advancePayments->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('advancePayments.show', [$advancePayments->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('advancePayments.edit', [$advancePayments->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
