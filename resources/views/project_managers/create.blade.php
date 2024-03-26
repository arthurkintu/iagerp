@extends('layouts.default')

{{-- Page title --}}
@section('title')
Project Managers @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Project Managers</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'projectManagers.store','class' => 'form-horizontal']) !!}

                    @include('project_managers.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
