<div class="table-responsive">
    <table class="table" id="gRNS-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Suppliername</th>
        <th>Quotations</th>
        <th>Grnphysicalcopy</th>
        <th>Grncomments</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gRNS as $gRN)
            <tr>
                <td>{{ $gRN->id }}</td>
            <td>{{ $gRN->Suppliername }}</td>
            <td>{{ $gRN->Quotations }}</td>
            <td>{{ $gRN->GRNphysicalcopy }}</td>
            <td>{{ $gRN->GRNcomments }}</td>
            <td>{{ $gRN->created_at }}</td>
            <td>{{ $gRN->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['gRNS.destroy', $gRN->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gRNS.show', [$gRN->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('gRNS.edit', [$gRN->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
