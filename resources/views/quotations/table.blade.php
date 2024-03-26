<div class="table-responsive">
    <table class="table" id="quotations-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Quotationno</th>
        <th>Suppliername</th>
        <th>Tonumber</th>
        <th>Date</th>
        <th>Naration</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($quotations as $quotations)
            <tr>
                <td>{{ $quotations->id }}</td>
            <td>{{ $quotations->QuotationNo }}</td>
            <td>{{ $quotations->SupplierName }}</td>
            <td>{{ $quotations->TONumber }}</td>
            <td>{{ $quotations->Date }}</td>
            <td>{{ $quotations->Naration }}</td>
            <td>{{ $quotations->created_at }}</td>
            <td>{{ $quotations->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['quotations.destroy', $quotations->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('quotations.show', [$quotations->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('quotations.edit', [$quotations->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
