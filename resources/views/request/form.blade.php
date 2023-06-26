<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_saurcers') }}
            {{ Form::text('id_saurcers', $request->id_saurcers, ['class' => 'form-control' . ($errors->has('id_saurcers') ? ' is-invalid' : ''), 'placeholder' => 'Id Saurcers']) }}
            {!! $errors->first('id_saurcers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_customers') }}
            {{ Form::text('id_customers', $request->id_customers, ['class' => 'form-control' . ($errors->has('id_customers') ? ' is-invalid' : ''), 'placeholder' => 'Id Customers']) }}
            {!! $errors->first('id_customers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>