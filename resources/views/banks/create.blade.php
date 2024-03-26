@extends('layouts.default')

{{-- Page title --}}
@section('title')
Banks @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Banks</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'banks.store','class' => 'form-horizontal']) !!}

                    @include('banks.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
