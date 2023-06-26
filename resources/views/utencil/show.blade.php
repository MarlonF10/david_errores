@extends('layouts.app')

@section('template_title')
    {{ $utencil->name ?? "{{ __('Show') Utencil" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Lista de') }} utencilios</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('utencils.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $utencil->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $utencil->type }}
                        </div>
                        <div class="form-group">
                            <strong> Fecha de compra:</strong>
                            {{ $utencil->date_purchase }}
                        </div>
                        <div class="form-group">
                            <strong>Uso:</strong>
                            {{ $utencil->use }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
