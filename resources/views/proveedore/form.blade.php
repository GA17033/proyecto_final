<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proveedore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $proveedore->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $proveedore->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('ciudad') }}
                {{ Form::text('ciudad', $proveedore->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
                {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('codigo_postal') }}
                {{ Form::number('codigo_postal', $proveedore->codigo_postal, ['class' => 'form-control' . ($errors->has('codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
                {!! $errors->first('codigo_postal', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('telefono') }}
                {{ Form::text('telefono', $proveedore->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('metodos_de_pagos') }}
                {{ Form::text('metodos_de_pagos', $proveedore->metodos_de_pagos, ['class' => 'form-control' . ($errors->has('metodos_de_pagos') ? ' is-invalid' : ''), 'placeholder' => 'Metodos De Pagos']) }}
                {!! $errors->first('metodos_de_pagos', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('tipo_descuento') }}
                {{ Form::text('tipo_descuento', $proveedore->tipo_descuento, ['class' => 'form-control' . ($errors->has('tipo_descuento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Descuento']) }}
                {!! $errors->first('tipo_descuento', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('notas') }}
                {{ Form::text('notas', $proveedore->notas, ['class' => 'form-control' . ($errors->has('notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
                {!! $errors->first('notas', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('descuento_disponible') }}
                {{ Form::number('descuento_disponible', $proveedore->descuento_disponible, ['class' => 'form-control' . ($errors->has('descuento_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Descuento Disponible']) }}
                {!! $errors->first('descuento_disponible', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('pais') }}
                {{ Form::text('pais', $proveedore->pais, ['class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
                {!! $errors->first('pais', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit"
            class="btn btn-{{ $btn == 1 ? 'success' : 'warning' }}">{{ $btn == 1 ? 'Enviar' : 'Editar' }}</button>
    </div>
</div>
