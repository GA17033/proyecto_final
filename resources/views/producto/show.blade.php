@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            @php
                            foreach ($categorias as $categoria) {
                               if ($producto->id_categorias==$categoria->id) {
                                    echo $categoria->nombre;
                               }
                            }
                            @endphp
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            @php
                            foreach ($proveedores as $proveedore) {
                               if ($producto->id_proveedores==$proveedore->id) {
                                    echo $proveedore->nombre;
                               }
                            }
                            @endphp
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $producto->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Ranking:</strong>
                            {{ $producto->ranking }}
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Imagen:</strong>
                                <img src="{{ asset('storage/productos').'/'. $producto->foto }}" alt="{{ $producto->nombre }}" width="450">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
