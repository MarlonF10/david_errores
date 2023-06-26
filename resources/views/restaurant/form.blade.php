<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $restaurant->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('direction', $restaurant->direction, ['class' => 'form-control' . ($errors->has('direction') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('direction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de teléfono') }}
            {{ Form::text('cellphone', $restaurant->cellphone, ['class' => 'form-control' . ($errors->has('cellphone') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('cellphone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de apertura') }}
            {{ Form::text('star_time', $restaurant->star_time, ['class' => 'form-control' . ($errors->has('star_time') ? ' is-invalid' : ''), 'placeholder' => ' Time']) }}
            {!! $errors->first('star_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de cierre') }}
            {{ Form::text('finish_time', $restaurant->finish_time, ['class' => 'form-control' . ($errors->has('finish_time') ? ' is-invalid' : ''), 'placeholder' => ' Time']) }}
            {!! $errors->first('finish_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empleado') }}
            {{ Form::text('id1', $restaurant->id1, ['class' => 'form-control' . ($errors->has('id1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id1', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
