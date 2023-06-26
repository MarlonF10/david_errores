@extends('layouts.app')

@section('template_title')
    {{ $drink->name ?? "{{ __('Show') Drink" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Drink</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('drinks.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $drink->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $drink->type }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredientes Principales:</strong>
                            {{ $drink->main_ingredients }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $drink->price }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $drink->comments }}
                        </div>
                        <div class="form-group">
                            <strong>Características:</strong>
                            {{ $drink->characteristics }}
                        </div>
                        <div class="form-group">
                            <strong>ID Cliente:</strong>
                            {{ $drink->id_customers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
