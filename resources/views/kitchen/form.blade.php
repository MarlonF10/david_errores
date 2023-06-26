<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre de cocineros') }}
            {{ Form::text('n_cooks', $kitchen->n_cooks, ['class' => 'form-control' . ($errors->has('n_cooks') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('n_cooks', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de meseros') }}
            {{ Form::text('n_waiters', $kitchen->n_waiters, ['class' => 'form-control' . ($errors->has('n_waiters') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('n_waiters', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Receta') }}
            {{ Form::text('id_recipes', $kitchen->id_recipes, ['class' => 'form-control' . ($errors->has('id_recipes') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('id_recipes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Menú') }}
            {{ Form::text('id_menus', $kitchen->id_menus, ['class' => 'form-control' . ($errors->has('id_menus') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('id_menus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Utencilios') }}
            {{ Form::text('id_utencils', $kitchen->id_utencils, ['class' => 'form-control' . ($errors->has('id_utencils') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('id_utencils', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardado') }}</button>
    </div>
</div>
