@extends('layouts.default')

{{-- Page title --}}
@section('title')
Task Orders @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Task Orders</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($taskOrders, ['route' => ['taskOrders.update', $taskOrders->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('task_orders.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
