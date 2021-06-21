@extends('layouts.app')

@section('template_title')
    Pago
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
                                {{ __('Pagos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('pagos.create') }}" class="btn btn-success btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nuevo Metodo de Pago') }}
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

                                        <th>Tipo De Pago</th>
                                        <th>Permitido</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pagos as $pago)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $pago->tipo_de_pago }}</td>
                                            <td>{{ $pago->permitido ? 'Permitido':'No Permitido' }}</td>

                                            <td>
                                                <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('pagos.show', $pago->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-warning"
                                                        href="{{ route('pagos.edit', $pago->id) }}"><i
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
                {!! $pagos->links() !!}
            </div>
        </div>
    </div>
@endsection
