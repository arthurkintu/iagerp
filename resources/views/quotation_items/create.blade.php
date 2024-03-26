@extends('layouts.default')

{{-- Page title --}}
@section('title')
Quotation Items @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Quotation Items</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'quotationItems.store','class' => 'form-horizontal']) !!}

                    @include('quotation_items.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
