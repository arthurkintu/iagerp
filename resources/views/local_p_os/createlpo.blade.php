@extends('layouts.default')

{{-- Page title --}}
@section('title')
Local P Os @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1> Local POs</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'localPOs.store','class' => 'form-horizontal']) !!}

                    @include('local_p_os.fieldsv2')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
