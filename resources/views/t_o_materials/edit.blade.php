@extends('layouts.default')

{{-- Page title --}}
@section('title')
T O Materials @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} T O Materials</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($tOMaterials, ['route' => ['tOMaterials.update', $tOMaterials->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('t_o_materials.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
