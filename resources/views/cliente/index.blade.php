@extends('layouts.app')

@section('template_title')
    Cliente
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
                                {{ __('Clientes') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-success btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nuevo Cliente') }}
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
                                        <th>Apellido</th>
                                        <th>Clase</th>
                                        <th>Direccion</th>
                                        <th>Estado</th>
                                        <th>Pais</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Tarjeta Credito</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $cliente->Nombre }}</td>
                                            <td>{{ $cliente->Apellido }}</td>
                                            <td>{{ $cliente->Clase }}</td>
                                            <td>{{ $cliente->Direccion }}</td>
                                            <td>{{ $cliente->Estado }}</td>
                                            <td>{{ $cliente->Pais }}</td>
                                            <td>{{ $cliente->Telefono }}</td>
                                            <td>{{ $cliente->Email }}</td>
                                            <td>{{ $cliente->Password }}</td>
                                            <td>{{ $cliente->Targeta_Credito }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('clientes.show', $cliente->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-warning"
                                                        href="{{ route('clientes.edit', $cliente->id) }}"><i
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
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
