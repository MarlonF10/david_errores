@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Orderne
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Ordenes</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ordernes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('orderne.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
