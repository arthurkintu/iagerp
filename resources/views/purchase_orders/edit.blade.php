@extends('layouts.default')

{{-- Page title --}}
@section('title')
Purchase Orders @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Purchase Orders</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($purchaseOrders, ['route' => ['purchaseOrders.update', $purchaseOrders->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('purchase_orders.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
