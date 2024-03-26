@extends('layouts.default')

{{-- Page title --}}
@section('title')
Invoice Tracker @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Invoice Tracker</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($invoiceTracker, ['route' => ['invoiceTrackers.update', $invoiceTracker->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('invoice_trackers.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
