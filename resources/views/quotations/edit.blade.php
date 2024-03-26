@extends('layouts.default')

{{-- Page title --}}
@section('title')
Quotations @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Quotations</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($quotations, ['route' => ['quotations.update', $quotations->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('quotations.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
