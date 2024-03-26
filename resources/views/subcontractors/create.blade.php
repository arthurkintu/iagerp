@extends('layouts.default')

{{-- Page title --}}
@section('title')
Subcontractors @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Subcontractors</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'subcontractors.store','class' => 'form-horizontal']) !!}

                    @include('subcontractors.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
