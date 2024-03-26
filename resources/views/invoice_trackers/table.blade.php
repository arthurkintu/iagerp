<div class="table-responsive">
    <table class="table" id="invoiceTrackers-table">
        <thead>
            <tr>
        <th>TO</th>
        <th>Description</th>
        <th>TO Amount</th>
        <th>Location</th>
        <th>TO %</th>
        <th>Invoice Status</th>
        <th>Balance</th>
        <th>Inv. Group</th>
        <th>Paid Amount</th>
        <th>Bank</th>
        <th>Budgetbalance</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoiceTrackers as $invoiceTracker)
            <tr>
            <td>{{ $invoiceTracker->TONumber }}</td>
            <td>{{ $invoiceTracker->TODescription }}</td>
            <td>{{ $invoiceTracker->TOAmount }}</td>
            <td>{{ $invoiceTracker->Location }}</td>
            <td>{{ $invoiceTracker->TOPercetange }}</td>
            <td>{{ $invoiceTracker->InvoiceStatus }}</td>
            <td>{{ $invoiceTracker->RemainingBalance }}</td>
            <td>{{ $invoiceTracker->InvoiceGroup }}</td>
            <td>{{ $invoiceTracker->PaidAmount }}</td>
            <td>{{ $invoiceTracker->BankName }}</td>
            <td>{{ $invoiceTracker->BudgetBalance }}</td>
                <td>
                    {!! Form::open(['route' => ['invoiceTrackers.destroy', $invoiceTracker->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('invoiceTrackers.show', [$invoiceTracker->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('invoiceTrackers.edit', [$invoiceTracker->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
