@extends('layouts.app')

@section('template_title')
    {{ $bill->name ?? "{{ __('Show') Bill" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bill</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bills.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $bill->total }}
                        </div>
                        <div class="form-group">
                            <strong>Vat:</strong>
                            {{ $bill->vat }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ordenes:</strong>
                            {{ $bill->id_ordenes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
