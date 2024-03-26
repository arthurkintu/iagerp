@extends('layouts.default')

{{-- Page title --}}
@section('title')
Leave Application @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Leave Application</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'leaveApplications.store','class' => 'form-horizontal']) !!}

                    @include('leave_applications.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
