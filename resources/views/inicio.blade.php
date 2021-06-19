@extends('layouts.plantilla')

@section('content')
<div class="container">

<div class="wrap-breadcrumb">
    <ul>
        <li class="item-link"><a href="#" class="link">Inicio</a></li>
        <li class="item-link"><span>TPI Store</span></li>
    </ul>
</div>
<div class="row">

    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

        <div class="banner-shop">

        </div>

        <div class="wrap-shop-control">

            <h1 class="shop-title">Electronicos</h1>

            <div class="wrap-right">

                <div class="sort-item orderby ">
                    <select name="orderby" class="use-chosen">
                        <option value="menu_order" selected="selected">Por Defecto</option>
                        <option value="popularity">Ordenar por popularidad</option>
                        <option value="date">Ordenar por novedad</option>
                        <option value="price">Ordenar por precio: menor a mayor</option>
                        <option value="price-desc">Ordenar por precio: mayor a menor</option>
                    </select>
                </div>

            </div>

        </div>
        <!--end wrap shop control-->

        <div class="row">
            <productos />
        </div>

        <div class="wrap-pagination-info">
            <ul class="page-numbers">
                <li><span class="page-number-item current">1</span></li>
                <li><a class="page-number-item" href="#">2</a></li>
                <li><a class="page-number-item" href="#">3</a></li>
                <li><a class="page-number-item next-link" href="#">Siguiente</a></li>
            </ul>
            <p class="result-count">mostrando 1-8 de 12 resultados</p>
        </div>
    </div>
    <!--end main products rea-->

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
        <div class="widget mercado-widget categories-widget">
            <h2 class="widget-title">Todas las Categorias</h2>
            <ul class="list-cate">

            </ul>

        </div><!-- Categories widget-->

        <div class="widget mercado-widget filter-widget brand-widget">
            <div class="widget-content">
                <!-- Componente categoria-->
                <main class="py-4">
                    <categorias />
                </main>
            </div>
        </div><!-- brand widget-->





        <div class="widget mercado-widget widget-product">
            <h2 class="widget-title">Productos Populares</h2>
            <div class="widget-content">




                </ul>
            </div>
        </div><!-- brand widget-->

    </div>
    <!--end sitebar-->

</div>
<!--end row-->

</div>
@endsection