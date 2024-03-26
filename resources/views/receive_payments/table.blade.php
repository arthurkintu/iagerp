<div class="table-responsive">
    <table class="table" id="receivePayments-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Contractno</th>
        <th>Tonumber</th>
        <th>Referenceno</th>
        <th>Paymentdocumentno</th>
        <th>Digitalcopy</th>
        <th>Invoiceamount</th>
        <th>Totalpaid</th>
        <th>Bank</th>
        <th>Paymentmethod</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($receivePayments as $receivePayments)
            <tr>
                <td>{{ $receivePayments->id }}</td>
            <td>{{ $receivePayments->ContractNo }}</td>
            <td>{{ $receivePayments->TONumber }}</td>
            <td>{{ $receivePayments->ReferenceNo }}</td>
            <td>{{ $receivePayments->PaymentDocumentNo }}</td>
            <td>{{ $receivePayments->DigitalCopy }}</td>
            <td>{{ $receivePayments->InvoiceAmount }}</td>
            <td>{{ $receivePayments->TotalPaid }}</td>
            <td>{{ $receivePayments->Bank }}</td>
            <td>{{ $receivePayments->PaymentMethod }}</td>
            <td>{{ $receivePayments->created_at }}</td>
            <td>{{ $receivePayments->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['receivePayments.destroy', $receivePayments->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('receivePayments.show', [$receivePayments->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('receivePayments.edit', [$receivePayments->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
