@extends('layouts.default')

{{-- Page title --}}
@section('title')
Clients @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Clients</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($clients, ['route' => ['clients.update', $clients->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('clients.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
