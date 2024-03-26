@extends('layouts.default')

{{-- Page title --}}
@section('title')
Task Order Proposals @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Task Order Proposals</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($taskOrderProposals, ['route' => ['taskOrderProposals.update', $taskOrderProposals->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('task_order_proposals.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
