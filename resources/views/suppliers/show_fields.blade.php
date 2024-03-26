<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $suppliers->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('SupplierName', 'Suppliername:') !!}</th>
    <td>{{ $suppliers->SupplierName }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('Location', 'Location:') !!}</th>
    <td>{{ $suppliers->Location }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('SupplierContact', 'Suppliercontact:') !!}</th>
    <td>{{ $suppliers->SupplierContact }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('SupplierBalance', 'Supplierbalance:') !!}</th>
    <td>{{ $suppliers->SupplierBalance }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $suppliers->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $suppliers->updated_at }}</td>
</tr>


