<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_de_pago') }}
            {{ Form::text('tipo_de_pago', $pago->tipo_de_pago, ['class' => 'form-control' . ($errors->has('tipo_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Pago']) }}
            {!! $errors->first('tipo_de_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="">
            {{ Form::label('permitido') }}
            {{--Form::checkbox('permitido', 1 , ($pago->permitido) ? 'checked="checked"' : '')--}}
            <!--input id="permitido" class="form-check-input" name="permitido" type="checkbox" class="form-control"  value="0"  {{($pago->permitido) ? 'checked="checked"' : '' }} /-->
                       
            <select id="permitido" name="permitido" class="form-control">    
                        <option value="1"  {{$pago->permitido==1 ? 'selected' : ''}}>Permitido</option>
                        <option value="0"  {{$pago->permitido==0 ? 'selected' : ''}}>No Permitido</option>
            </select>
           
            
            {!! $errors->first('permitido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-{{ $btn==1 ? 'success' : 'warning'}}">{{ $btn==1 ? 'Enviar' : 'Editar'}}</button>
    </div>
</div>