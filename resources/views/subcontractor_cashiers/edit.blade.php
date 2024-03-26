@extends('layouts.default')

{{-- Page title --}}
@section('title')
Subcontractor Cashiers @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Subcontractor Cashiers</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($subcontractorCashiers, ['route' => ['subcontractorCashiers.update', $subcontractorCashiers->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('subcontractor_cashiers.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
