@extends('layouts.app')

@section('template_title')
    Producto
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
                                {{ __('Productos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-success btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nuevo Producto') }}
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

                                        <th>Categoria</th>
                                        <th>Proveedor</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Ranking</th>
                                        <th>Foto</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>
                                                @foreach ($categorias as $categoria)
                                                    @php
                                                        if ($producto->id_categorias == $categoria->id) {
                                                            echo $categoria->nombre;
                                                        }
                                                    @endphp
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($proveedores as $proveedore)
                                                    @php
                                                        if ($producto->id_proveedores == $proveedore->id) {
                                                            echo $proveedore->nombre;
                                                        }
                                                    @endphp
                                                @endforeach
                                            </td>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->descripcion }}</td>
                                            <td>{{ $producto->precio }}</td>
                                            <td>{{ $producto->cantidad }}</td>
                                            <td>{{ $producto->ranking }}</td>
                                            <td><img src="{{ asset('storage/productos') . '/' . $producto->foto }}"
                                                    alt="{{ $producto->nombre }}" width="150" height="100"></td>

                                            <td>
                                                <form action="{{ route('productos.destroy', $producto->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('productos.show', $producto->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-warning"
                                                        href="{{ route('productos.edit', $producto->id) }}"><i
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
