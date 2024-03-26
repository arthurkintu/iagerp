@extends('layouts.default')

{{-- Page title --}}
@section('title')
Task Orders @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Task Orders</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>



<!-- Main content -->
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="card">
        <section class="card-header">
            <h5 class="card-title d-inline">Task Orders</h5>
            <span class="float-right">
                <a class="btn btn-primary pull-right" href="{{ route('taskOrders.create') }}">Add New</a>
                <button onclick="window.print()" class="btn btn-secondary">Print</button>
            </span>
        </section>
        <div class="card-body">
            @include('task_orders.table')
        </div>
    </div>
    <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $taskOrders])

    </div>
</div>
@endsection

