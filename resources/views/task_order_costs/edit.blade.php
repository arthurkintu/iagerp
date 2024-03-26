@extends('layouts.default')

{{-- Page title --}}
@section('title')
Task Order Costs @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Task Order Costs</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($taskOrderCosts, ['route' => ['taskOrderCosts.update', $taskOrderCosts->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('task_order_costs.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
