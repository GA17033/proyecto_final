<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!--Header-->
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">TIENDA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/inicio">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COMPRAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CARRITO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ACERCA DE NOSOTROS</a>
                        </li>
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar Categoría" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
                    </form>
                </div>
            </nav>

        </header>

        <main class="py-4">
           @yield('content')  
        </main>

    </div>
</body>
</html>
