@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $cliente->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Clase:</strong>
                            {{ $cliente->Clase }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cliente->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $cliente->Pais }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Password:</strong>
                            {{ $cliente->Password }}
                        </div>
                        <div class="form-group">
                            <strong>Targeta Credito:</strong>
                            {{ $cliente->Targeta_Credito }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
