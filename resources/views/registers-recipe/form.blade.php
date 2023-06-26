<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la receta') }}
            {{ Form::text('name_recipe', $registersRecipe->name_recipe, ['class' => 'form-control' . ($errors->has('name_recipe') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('name_recipe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Receta') }}
            {{ Form::text('recipe', $registersRecipe->recipe, ['class' => 'form-control' . ($errors->has('recipe') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('recipe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de receta') }}
            {{ Form::text('type_recipe', $registersRecipe->type_recipe, ['class' => 'form-control' . ($errors->has('type_recipe') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('type_recipe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('description', $registersRecipe->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Restaurante') }}
            {{ Form::text('id2', $registersRecipe->id2, ['class' => 'form-control' . ($errors->has('id2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardado') }}</button>
    </div>
</div>