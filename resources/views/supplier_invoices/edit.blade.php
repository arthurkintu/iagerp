@extends('layouts.default')

{{-- Page title --}}
@section('title')
Supplier Invoices @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Supplier Invoices</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($supplierInvoices, ['route' => ['supplierInvoices.update', $supplierInvoices->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('supplier_invoices.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
