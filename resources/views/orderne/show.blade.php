@extends('layouts.app')

@section('template_title')
    {{ $orderne->name ?? "{{ __('Show') Orderne" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Ordenes</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordernes.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Platillo:</strong>
                            {{ $orderne->id_saurcers }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bebida:</strong>
                            {{ $orderne->id_drinks }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $orderne->id_customers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
