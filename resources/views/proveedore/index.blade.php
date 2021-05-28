@extends('layouts.app')

@section('template_title')
    Proveedore
@endsection

@section('content')
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
                                <a href="{{ route('proveedores.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo proveedor') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
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
											<td>{{ $proveedore->Direccion }}</td>
											<td>{{ $proveedore->Ciudad }}</td>
											<td>{{ $proveedore->Codigo_postal }}</td>
											<td>{{ $proveedore->Telefono }}</td>
											<td>{{ $proveedore->Email }}</td>
											<td>{{ $proveedore->Metodos_de_pagos }}</td>
											<td>{{ $proveedore->Tipo_descuento }}</td>
											<td>{{ $proveedore->Notas }}</td>
											<td>{{ $proveedore->Descuento_disponible }}</td>
											<td>{{ $proveedore->Pais }}</td>

                                            <td>
                                                <form action="{{ route('proveedores.destroy',$proveedore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proveedores.show',$proveedore->id) }}"><i class="fa fa-fw fa-eye"></i> ver</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('proveedores.edit',$proveedore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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
