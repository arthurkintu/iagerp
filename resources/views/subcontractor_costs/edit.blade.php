@extends('layouts.default')

{{-- Page title --}}
@section('title')
Subcontractor Costs @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Subcontractor Costs</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($subcontractorCosts, ['route' => ['subcontractorCosts.update', $subcontractorCosts->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('subcontractor_costs.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
