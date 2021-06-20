@extends('layouts.app')

@section('template_title')
    Proveedore
@endsection

@section('content')
    @if ($message = Session::get('success'))
        @php
            $color = Session::get('color');
        @endphp
        <div class="alert alert-{{ $color }} border border-{{ $color }} alert-dismissible fade show "
            style="position: absolute; top: 5px; right: 0;">
            <p>{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <script>
        window.setTimeout(function() {
            $(".alert").alert('close');
        }, 3000);

    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedores') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('proveedores.create') }}" class="btn btn-success btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nuevo proveedor') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>

                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Ciudad</th>
                                        <th>Codigo Postal</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Metodos De Pagos</th>
                                        <th>Tipo Descuento</th>
                                        <th>Notas</th>
                                        <th>Descuento Disponible</th>
                                        <th>Pais</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedores as $proveedore)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $proveedore->nombre }}</td>
                                            <td>{{ $proveedore->direccion }}</td>
                                            <td>{{ $proveedore->ciudad }}</td>
                                            <td>{{ $proveedore->codigo_postal }}</td>
                                            <td>{{ $proveedore->telefono }}</td>
                                            <td>{{ $proveedore->email }}</td>
                                            <td>{{ $proveedore->metodos_de_pagos }}</td>
                                            <td>{{ $proveedore->tipo_descuento }}</td>
                                            <td>{{ $proveedore->notas }}</td>
                                            <td>{{ $proveedore->descuento_disponible }}</td>
                                            <td>{{ $proveedore->pais }}</td>

                                            <td>
                                                <form action="{{ route('proveedores.destroy', $proveedore->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('proveedores.show', $proveedore->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> ver</a>
                                                    <a class="btn btn-sm btn-warning"
                                                        href="{{ route('proveedores.edit', $proveedore->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedores->links() !!}
            </div>
        </div>
    </div>
@endsection
