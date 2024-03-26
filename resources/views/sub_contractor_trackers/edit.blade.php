@extends('layouts.default')

{{-- Page title --}}
@section('title')
Sub Contractor Tracker @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Sub Contractor Tracker</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($subContractorTracker, ['route' => ['subContractorTrackers.update', $subContractorTracker->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('sub_contractor_trackers.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
