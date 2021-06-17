<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('Nombre') }}
                {{ Form::text('Nombre', $cliente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('Apellido') }}
                {{ Form::text('Apellido', $cliente->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
                {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('Direccion') }}
                {{ Form::text('Direccion', $cliente->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('Estado') }}
                {{ Form::text('Estado', $cliente->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                {!! $errors->first('Estado', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('Pais') }}
                {{ Form::text('Pais', $cliente->Pais, ['class' => 'form-control' . ($errors->has('Pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
                {!! $errors->first('Pais', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('Email') }}
                {{ Form::text('Email', $cliente->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                {!! $errors->first('Email', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('Clase') }}
                {{ Form::text('Clase', $cliente->Clase, ['class' => 'form-control' . ($errors->has('Clase') ? ' is-invalid' : ''), 'placeholder' => 'Clase']) }}
                {!! $errors->first('Clase', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('Telefono') }}
                {{ Form::text('Telefono', $cliente->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col">
                {{ Form::label('Password') }}
                {{ Form::text('Password', $cliente->Password, ['class' => 'form-control' . ($errors->has('Password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
                {!! $errors->first('Password', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('Tarjeta_Credito') }}
                {{ Form::text('Targeta_Credito', $cliente->Targeta_Credito, ['class' => 'form-control' . ($errors->has('Targeta_Credito') ? ' is-invalid' : ''), 'placeholder' => 'Tarjeta Credito']) }}
                {!! $errors->first('Targeta_Credito', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>

        <div class="box-footer mt20">
            <button type="submit"
                class="btn btn-{{ $btn == 1 ? 'success' : 'warning' }}">{{ $btn == 1 ? 'Enviar' : 'Editar' }}</button>
        </div>
    </div>
</div>
