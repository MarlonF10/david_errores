@extends('layouts.app')

@section('template_title')
    {{ $ingredient->name ?? "{{ __('Show') Ingredient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Ingredientes</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingredients.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ingredient->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $ingredient->type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
