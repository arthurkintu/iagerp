@extends('layouts.default')

{{-- Page title --}}
@section('title')
Banks @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Banks</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($banks, ['route' => ['banks.update', $banks->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('banks.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
