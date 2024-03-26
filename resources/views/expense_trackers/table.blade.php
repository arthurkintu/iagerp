<div class="table-responsive">
    <table class="table" id="expenseTrackers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Generalexpenses</th>
        <th>Supplierexpenses</th>
        <th>Subcontractorexpenses</th>
        <th>Payroll</th>
        <th>Pettycashbalance</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($expenseTrackers as $expenseTrackers)
            <tr>
                <td>{{ $expenseTrackers->id }}</td>
            <td>{{ $expenseTrackers->GeneralExpenses }}</td>
            <td>{{ $expenseTrackers->SupplierExpenses }}</td>
            <td>{{ $expenseTrackers->SubcontractorExpenses }}</td>
            <td>{{ $expenseTrackers->Payroll }}</td>
            <td>{{ $expenseTrackers->PettyCashBalance }}</td>
            <td>{{ $expenseTrackers->created_at }}</td>
            <td>{{ $expenseTrackers->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['expenseTrackers.destroy', $expenseTrackers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('expenseTrackers.show', [$expenseTrackers->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('expenseTrackers.edit', [$expenseTrackers->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
