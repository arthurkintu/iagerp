@extends('layouts.default')

{{-- Page title --}}
@section('title')
Advance Payments @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Advance Payments</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($advancePayments, ['route' => ['advancePayments.update', $advancePayments->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('advance_payments.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
