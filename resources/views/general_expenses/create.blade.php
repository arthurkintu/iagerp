@extends('layouts.default')

{{-- Page title --}}
@section('title')
General Expenses @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} General Expenses</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'generalExpenses.store','class' => 'form-horizontal']) !!}

                    @include('general_expenses.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
