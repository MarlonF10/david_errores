@extends('layouts.app')

@section('template_title')
    {{ $kitchen->name ?? "{{ __('Show') Kitchen" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Cocina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('kitchens.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de cocineros:</strong>
                            {{ $kitchen->n_cooks }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de meseros:</strong>
                            {{ $kitchen->n_waiters }}
                        </div>
                        <div class="form-group">
                            <strong>Id Receta:</strong>
                            {{ $kitchen->id_recipes }}
                        </div>
                        <div class="form-group">
                            <strong>Id Menú:</strong>
                            {{ $kitchen->id_menus }}
                        </div>
                        <div class="form-group">
                            <strong>Id Utencilios:</strong>
                            {{ $kitchen->id_utencils }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
