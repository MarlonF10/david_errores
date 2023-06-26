<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id Platillo') }}
            {{ Form::text('id_saurcers', $orderne->id_saurcers, ['class' => 'form-control' . ($errors->has('id_saurcers') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_saurcers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Bebida') }}
            {{ Form::text('id_drinks', $orderne->id_drinks, ['class' => 'form-control' . ($errors->has('id_drinks') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_drinks', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Cliente') }}
            {{ Form::text('id_customers', $orderne->id_customers, ['class' => 'form-control' . ($errors->has('id_customers') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_customers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>