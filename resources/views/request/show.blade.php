@extends('layouts.app')

@section('template_title')
    {{ $request->name ?? "{{ __('Show') Request" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Request</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('requests.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Saurcers:</strong>
                            {{ $request->id_saurcers }}
                        </div>
                        <div class="form-group">
                            <strong>Id Customers:</strong>
                            {{ $request->id_customers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
