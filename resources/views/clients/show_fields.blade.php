<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $clients->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('ClientName', 'Clientname:') !!}</th>
    <td>{{ $clients->ClientName }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('Location', 'Location:') !!}</th>
    <td>{{ $clients->Location }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $clients->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $clients->updated_at }}</td>
</tr>


