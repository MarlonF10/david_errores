@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? "{{ __('Show') Employee" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $employee->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $employee->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>DNI:</strong>
                            {{ $employee->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Género:</strong>
                            {{ $employee->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Cumpleaños:</strong>
                            {{ $employee->birthday }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
