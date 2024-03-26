<div class="table-responsive">
    <table class="table" id="payrolls-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Salary</th>
                <th>Deductions</th>
                <th>Attendance</th>
                <th>Advance Payments</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payrolls as $payroll)
            <tr>
                <td>{{ $payroll->Name }}</td>
                <td>{{ $payroll->Salary }}</td>
                <td>{{ $payroll->Deductions }}</td>
                <td>{{ $payroll->DaysofAttendance }}</td>
                <td>{{ $payroll->AdvancePayments }}</td>
                <td>
                    {!! Form::open(['route' => ['payrolls.destroy', $payroll->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payrolls.show', [$payroll->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('payrolls.edit', [$payroll->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-File-Edit"></i></a>
                        {!! Form::button('<i class="im im-icon-Remove"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Total Salary Expense</th>
                <th>{{ $payrolls->sum('Salary') }}</th>
                <!-- Assuming $payrolls is the collection of all payroll records -->
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>
