<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_clientes') }}
            {{ Form::text('id_clientes', $compra->id_clientes, ['class' => 'form-control' . ($errors->has('id_clientes') ? ' is-invalid' : ''), 'placeholder' => 'Id Clientes']) }}
            {!! $errors->first('id_clientes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_carritos') }}
            {{ Form::text('id_carritos', $compra->id_carritos, ['class' => 'form-control' . ($errors->has('id_carritos') ? ' is-invalid' : ''), 'placeholder' => 'Id Carritos']) }}
            {!! $errors->first('id_carritos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $compra->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>