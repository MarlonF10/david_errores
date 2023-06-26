@extends('layouts.app')

@section('template_title')
    {{ $menu->name ?? "{{ __('Show') Menu" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Menú</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('menus.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $menu->category }}
                        </div>
                        <div class="form-group">
                            <strong>Clasificación:</strong>
                            {{ $menu->classification }}
                        </div>
                        <div class="form-group">
                            <strong>Id Platillos:</strong>
                            {{ $menu->id_saurcers }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bebidas:</strong>
                            {{ $menu->id_drinks }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
