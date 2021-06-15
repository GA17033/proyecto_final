<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-row">
            <div class="form-group col">
                {{ Form::label('id_categorias') }}
                <select id="id_categorias" name="id_categorias" class="form-control @error('id_categorias') is-invalid @enderror">
                    <option value="">------Seleccionar------</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}"
                            {{ $categoria->id == $producto->id_categorias ? 'selected' : '' }}>{{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('id_categorias', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
            <div class="form-group col">
                {{ Form::label('id_proveedores') }}
                <select id="id_proveedores" name="id_proveedores" class="form-control @error('id_proveedores') is-invalid @enderror">
                    <option value="">------Seleccionar------</option>
                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}"
                            {{ $proveedor->id == $producto->id_proveedores ? 'selected' : '' }}>{{ $proveedor->nombre }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('id_proveedores', '<div class="invalid-feedback">:message</p></div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-row">
        <div class="form-group col">
            {{ Form::label('precio') }}
            {{ Form::number('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group col">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $producto->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group col">
            {{ Form::label('ranking') }}
            {{ Form::number('ranking', $producto->ranking, ['class' => 'form-control' . ($errors->has('ranking') ? ' is-invalid' : ''), 'placeholder' => 'Ranking']) }}
            {!! $errors->first('ranking', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
    </div>
        <div class="form-group">
            {{ Form::label('foto') }}
            <input type="file" name="foto" id="foto" class="form-control">
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit"
            class="btn btn-{{ $btn == 1 ? 'success' : 'warning' }}">{{ $btn == 1 ? 'Enviar' : 'Editar' }}</button>
    </div>
</div>
