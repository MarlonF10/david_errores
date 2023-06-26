<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('total', $bill->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IVA') }}
            {{ Form::text('vat', $bill->vat, ['class' => 'form-control' . ($errors->has('vat') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('vat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Orden') }}
            {{ Form::text('id_ordenes', $bill->id_ordenes, ['class' => 'form-control' . ($errors->has('id_ordenes') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_ordenes', '<div class="invalid-feedback">:message</div>') !!}

            <select name="ordenes" id="ordernes_id">
                <option disabled>Selecione:</option>
                @foreach ($ordernes as $orderne)
                <option value="{{ $orderne->id }}">{{ $orderne->id }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
