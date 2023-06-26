<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::text('category', $menu->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clasificación') }}
            {{ Form::text('classification', $menu->classification, ['class' => 'form-control' . ($errors->has('classification') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('classification', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Platillos') }}
            {{ Form::text('id_saurcers', $menu->id_saurcers, ['class' => 'form-control' . ($errors->has('id_saurcers') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('id_saurcers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Bebidas') }}
            {{ Form::text('id_drinks', $menu->id_drinks, ['class' => 'form-control' . ($errors->has('id_drinks') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('id_drinks', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
