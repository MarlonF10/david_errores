@extends('layouts.app')

@section('template_title')
    {{ $saurcer->name ?? "{{ __('Show') Saurcer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Platillos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('saurcers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $saurcer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $saurcer->type }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredientes Principales:</strong>
                            {{ $saurcer->main_ingredients }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $saurcer->price }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $saurcer->comments }}
                        </div>
                        <div class="form-group">
                            <strong>Características:</strong>
                            {{ $saurcer->characteristics }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ingredientes:</strong>
                            {{ $saurcer->id3 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
