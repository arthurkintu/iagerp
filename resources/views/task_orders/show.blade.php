@extends('layouts.default')

{{-- Page title --}}
@section('title', 'Task Order Details')

@section('content')
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Information</h5>
                        <p class="card-text">Id: {{ $taskOrders->id }}</p>
                        <p class="card-text">TONumber: {{ $taskOrders->TONumber }}</p>
                        <p class="card-text">Todescription: {{ $taskOrders->Todescription }}</p>
                        <p class="card-text">Contractno: {{ $taskOrders->ContractNo }}</p>
                        <p class="card-text">Topnumber: {{ $taskOrders->Topnumber }}</p>
                        <p class="card-text">Wbsenumber: {{ $taskOrders->Wbsenumber }}</p>
                        <p class="card-text">Pm: {{ $taskOrders->PM }}</p>
                        <p class="card-text">Startdate: {{ $taskOrders->Startdate }}</p>
                        <p class="card-text">Completiondate: {{ $taskOrders->CompletionDate }}</p>
                        <p class="card-text">Approvaldate: {{ $taskOrders->ApprovalDate }}</p>
                        <p class="card-text">Uniquenumber: {{ $taskOrders->UniqueNumber }}</p>
                        <p class="card-text">Location: {{ $taskOrders->Location }}</p>
                        <p class="card-text">Toamount: {{ $taskOrders->TOAmount }}</p>
                        <p class="card-text">Created At: {{ $taskOrders->created_at }}</p>
                        <p class="card-text">Updated At: {{ $taskOrders->updated_at }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Costs Breakdown</h5>
                        <p class="card-text">Total TO Costs and Expenses:</p>
                        @foreach ($taskOrders->totalAmountByTONumber() as $TONumber => $totalAmount)
                            <p class="card-text">TONumber: {{ $TONumber }}, Total Amount: {{ $totalAmount }}</p>
                        @endforeach

                        <p class="card-text">Total Subcontractor Costs:</p>
                        @foreach ($taskOrders->totalAmountByTONumber() as $TONumber => $totalAmount)
                            @php
                                $subcontractorCost = $subcontractorCostData[$TONumber] ?? null;
                            @endphp
                            <p class="card-text">TONumber: {{ $TONumber }}, Subcontractor Cost: {{ $subcontractorCost }}</p>
                        @endforeach

                        @php
                            $totalTOCost = 0;
                            $totalSubcontractorCost = 0;

                            // Calculate total TO cost
                            foreach ($taskOrders->totalAmountByTONumber() as $TONumber => $totalAmount) {
                                $totalTOCost += $totalAmount;
                            }

                            // Calculate total subcontractor cost
                            foreach ($taskOrders->totalAmountByTONumber() as $TONumber => $totalAmount) {
                                $subcontractorCost = $subcontractorCostData[$TONumber] ?? 0;
                                $totalSubcontractorCost += $subcontractorCost;
                            }

                            // Calculate final TO cost
                            $finalTOCost = $totalTOCost + $totalSubcontractorCost;
                        @endphp
                        <p class="card-text">Final TO Costs: {{ $finalTOCost }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <a href="{{ route('taskOrders.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
