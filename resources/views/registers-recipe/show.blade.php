@extends('layouts.app')

@section('template_title')
    {{ $registersRecipe->name ?? "{{ __('Show') Registers Recipe" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Registro de las recetas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registers_recipes.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong> Nombre de la receta:</strong>
                            {{ $registersRecipe->name_recipe }}
                        </div>
                        <div class="form-group">
                            <strong>Receta:</strong>
                            {{ $registersRecipe->recipe }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de receta:</strong>
                            {{ $registersRecipe->type_recipe }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $registersRecipe->description }}
                        </div>
                        <div class="form-group">
                            <strong>Id Restaurante:</strong>
                            {{ $registersRecipe->id2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
