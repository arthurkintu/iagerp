<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $generalExpenses->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('ExpenseName', 'Expensename:') !!}</th>
    <td>{{ $generalExpenses->ExpenseName }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('Amount', 'Amount:') !!}</th>
    <td>{{ $generalExpenses->Amount }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('Date', 'Date:') !!}</th>
    <td>{{ $generalExpenses->Date }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $generalExpenses->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $generalExpenses->updated_at }}</td>
</tr>


