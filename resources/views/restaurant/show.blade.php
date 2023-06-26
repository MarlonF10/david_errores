@extends('layouts.app')

@section('template_title')
    {{ $restaurant->name ?? "{{ __('Show') Restaurant" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Restaurante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('restaurants.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $restaurant->name }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $restaurant->direction }}
                        </div>
                        <div class="form-group">
                            <strong>Número de teléfono:</strong>
                            {{ $restaurant->cellphone }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de apertura:</strong>
                            {{ $restaurant->star_time }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de cierre:</strong>
                            {{ $restaurant->finish_time }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $restaurant->id1 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
