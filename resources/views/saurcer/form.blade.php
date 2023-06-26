<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $saurcer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('type', $saurcer->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ingredientes pricipales') }}
            {{ Form::text('main_ingredients', $saurcer->main_ingredients, ['class' => 'form-control' . ($errors->has('main_ingredients') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('main_ingredients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('price', $saurcer->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios') }}
            {{ Form::text('comments', $saurcer->comments, ['class' => 'form-control' . ($errors->has('comments') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('comments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Características') }}
            {{ Form::text('characteristics', $saurcer->characteristics, ['class' => 'form-control' . ($errors->has('characteristics') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('characteristics', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Ingredientes') }}
            {{ Form::text('id3', $saurcer->id3, ['class' => 'form-control' . ($errors->has('id3') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id3', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
