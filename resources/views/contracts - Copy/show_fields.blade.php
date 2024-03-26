<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $contracts->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('ContractNo', 'Contractno:') !!}</th>
    <td>{{ $contracts->ContractNo }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('Client', 'Client:') !!}</th>
    <td>{{ $contracts->Client }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('StartDate', 'Startdate:') !!}</th>
    <td>{{ $contracts->StartDate }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('ContractAmount', 'Contractamount:') !!}</th>
    <td>{{ $contracts->ContractAmount }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $contracts->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $contracts->updated_at }}</td>
</tr>


