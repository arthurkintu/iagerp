@extends('layouts.default')

{{-- Page title --}}
@section('title')
Quotations @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Quotations</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'quotations.store','class' => 'form-horizontal']) !!}

                    @include('quotations.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
