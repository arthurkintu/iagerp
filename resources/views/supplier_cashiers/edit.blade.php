@extends('layouts.default')

{{-- Page title --}}
@section('title')
Supplier Cashier @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Supplier Cashier</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($supplierCashier, ['route' => ['supplierCashiers.update', $supplierCashier->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('supplier_cashiers.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
