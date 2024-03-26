@extends('layouts.default')

{{-- Page title --}}
@section('title')
Receive Payments @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Receive Payments</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($receivePayments, ['route' => ['receivePayments.update', $receivePayments->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('receive_payments.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection