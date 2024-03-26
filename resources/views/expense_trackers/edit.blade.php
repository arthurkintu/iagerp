@extends('layouts.default')

{{-- Page title --}}
@section('title')
Expense Trackers @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Expense Trackers</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($expenseTrackers, ['route' => ['expenseTrackers.update', $expenseTrackers->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('expense_trackers.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
