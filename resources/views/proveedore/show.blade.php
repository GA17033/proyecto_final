@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? 'Show Proveedore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">ver Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedore->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $proveedore->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $proveedore->codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $proveedore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $proveedore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Metodos De Pagos:</strong>
                            {{ $proveedore->metodos_de_pagos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Descuento:</strong>
                            {{ $proveedore->tipo_descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $proveedore->notas }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento Disponible:</strong>
                            {{ $proveedore->descuento_disponible }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $proveedore->pais }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
