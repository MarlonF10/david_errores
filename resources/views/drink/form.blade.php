<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $drink->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('type', $drink->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ingredientes Principales') }}
            {{ Form::text('main_ingredients', $drink->main_ingredients, ['class' => 'form-control' . ($errors->has('main_ingredients') ? ' is-' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('main_ingredients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('price', $drink->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios') }}
            {{ Form::text('comments', $drink->comments, ['class' => 'form-control' . ($errors->has('comments') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('comments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Características') }}
            {{ Form::text('characteristics', $drink->characteristics, ['class' => 'form-control' . ($errors->has('characteristics') ? ' is-invalid' : ''), 'paceholder' => '']) }}
            {!! $errors->first('characteristics', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID Cliente') }}
            {{ Form::text('id_customers', $drink->id_customers, ['class' => 'form-control' . ($errors->has('id_customers') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('id_customers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>