@extends('layouts.default')

{{-- Page title --}}
@section('title')
Task Orders @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Task Orders</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'taskOrders.store','class' => 'form-horizontal']) !!}

                    @include('task_orders.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
