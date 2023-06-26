@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Registers Recipe
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Registers Recipe</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registers_recipes.update', $registersRecipe->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('registers-recipe.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
