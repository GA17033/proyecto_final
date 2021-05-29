@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? 'Show Categoria' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Regresar</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Categoria</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $categoria->descripcion }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $categoria->activo==0 ? 'Activo':'Inactivo' }}
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Imagen:</strong>
                                <img src="{{ asset('storage/categorias').'/'. $categoria->imagen }}" alt="{{ $categoria->nombre }}" width="450">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
