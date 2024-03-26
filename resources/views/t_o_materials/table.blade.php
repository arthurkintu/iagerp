<div class="table-responsive">
    <table class="table" id="tOMaterials-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Tonumber</th>
        <th>Itemname</th>
        <th>Unitofmeasurement</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Requestedby</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tOMaterials as $tOMaterials)
            <tr>
                <td>{{ $tOMaterials->id }}</td>
            <td>{{ $tOMaterials->TONumber }}</td>
            <td>{{ $tOMaterials->ItemName }}</td>
            <td>{{ $tOMaterials->UnitofMeasurement }}</td>
            <td>{{ $tOMaterials->Quantity }}</td>
            <td>{{ $tOMaterials->Date }}</td>
            <td>{{ $tOMaterials->RequestedBy }}</td>
            <td>{{ $tOMaterials->created_at }}</td>
            <td>{{ $tOMaterials->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['tOMaterials.destroy', $tOMaterials->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tOMaterials.show', [$tOMaterials->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('tOMaterials.edit', [$tOMaterials->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
