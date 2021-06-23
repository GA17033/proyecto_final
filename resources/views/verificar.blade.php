@extends('layouts.plantilla')

@section('content')

<!--main area-->
<main id="main" class="main-site">
    <ul class="list-cate">
        

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <form method="Post" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                 @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Nombres</label>
                    <input id="nombres" name="nombres" type="text" class="form-control" tabindex="1">
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Apellidos</label>
                    <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="2">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Clase </label>
                    <input id="clase " name="clase " type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input id="direccion" name="direccion" type="text"  class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Estado </label>
                    <input id="estado " name="estado " type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Pais</label>
                    <input id="pais" name="pais" type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono  </label>
                    <input id="telefono  " name="telefono  " type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email </label>
                    <input id="email  " name="email " type="text"  class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Clave</label>
                    <input id="clave" name="clave" type="password" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tarjeta Crédito </label>
                    <input id="tarjeta_credito  " name="tarjeta_Credito " type="text"  class="form-control" tabindex="3">
                </div>
                <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4" > Guardar</button>
            </form>
            
        </div><!--end container-->

    </main>
<!--main area-->

@endsection

 