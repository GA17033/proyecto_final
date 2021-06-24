@extends('layouts.plantilla')

@section('content')

<!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Inicio</a></li>
                <li class="item-link"><span>CONTÁCTENOS</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <!-- <div class="main-content-area"> -->
            
            <div class="aboutus-info style-center">
                <b class="box-title">CONTÁCTENOS</b>
                <p class="txt-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
            </div>

            <div class="row equal-container">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">10000</b>
                        <span class="sub-title">ARTÍCULOS EN LA TIENDA</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">90%</b>
                        <span class="sub-title">VUELVEN NUESTROS CLIENTES</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">2 millones</b>
                        <span class="sub-title">USUARIO DEL SITIO</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">¿QUÉ HACEMOS REALMENTE?</b>
                        <p class="txt-content">Contrariamente a la creencia popular, Lorem Ipsum no es simplemente un texto aleatorio. Tiene sus raíces en una pieza de la literatura latina clásica del 45 a. C., por lo que tiene más de 2000 años. Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">HISTORIA DE LA EMPRESA</b>
                        <p class="txt-content">Contrariamente a la creencia popular, Lorem Ipsum no es simplemente un texto aleatorio. Tiene sus raíces en una pieza de la literatura latina clásica del 45 a. C., por lo que tiene más de 2000 años. Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">NUESTRA VISIÓN</b>
                        <p class="txt-content">Contrariamente a la creencia popular, Lorem Ipsum no es simplemente un texto aleatorio. Tiene sus raíces en una pieza de la literatura latina clásica del 45 a. C., por lo que tiene más de 2000 años. Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">¡COOPERE CON NOSOTROS!</b>
                        <p class="txt-content">Contrariamente a la creencia popular, Lorem Ipsum no es simplemente un texto aleatorio. Tiene sus raíces en una pieza de la literatura latina clásica del 45 a. C., por lo que tiene más de 2000 años. Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">¡COOPERE CON NOSOTROS!</b>
                        <div class="list-showups">
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1" checked="checked">
                                <span class="check-box"></span>
                                <span class='function-name'>Soporte 24/7</span>
                                <span class="desc">Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica ...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
                                <span class="check-box"></span>
                                <span class='function-name'>Mejor Calidad</span>
                                <span class="desc">Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica ...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
                                <span class="check-box"></span>
                                <span class='function-name'>ENTREGA MÁS RÁPIDA</span>
                                <span class="desc">Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica ...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
                                <span class="check-box"></span>
                                <span class='function-name'>ATENCIÓN AL CLIENTE</span>
                                <span class="desc">Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica ...</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="our-team-info">
                <h4 class="title-box">NUESTROS EQUIPOS</h4>
                <div class="our-staff">
                    
                    <div 
                        class="slide-carousel  style-nav-1 equal-container" 
                        data-items="5" 
                        data-loop="false" 
                        data-nav="true" 
                        data-dots="false"
                        data-margin="30"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                        {{-- fila 1 --}}
                        <div class="row">

                        <div class="team-member equal-elem col">
                            <div class="media">
                                <a href="#" title="LEONA">
                                    <figure><img src="/images/member-leona.jpg" alt="LEONA"></figure>
                                </a>
                            </div>
                            <div class="info">
                                <b class="name">leona</b>
                                <span class="title">Director</span>
                                <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                            </div>
                        </div>

                        <div class="team-member equal-elem col">
                            <div class="media">
                                <a href="#" title="LUCIA">
                                    <figure><img src="/images/member-lucia.jpg" alt="LUCIA"></figure>
                                </a>
                            </div>
                            <div class="info">
                                <b class="name">LUCIA</b>
                                <span class="title">Manager</span>
                                <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                            </div>
                        </div>

                        <div class="team-member equal-elem col">
                            <div class="media">
                                <a href="#" title="NANA">
                                    <figure><img src="/images/member-nana.jpg" alt="NANA"></figure>
                                </a>
                            </div>
                            <div class="info">
                                <b class="name">NANA</b>
                                <span class="title">Marketer</span>
                                <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                            </div>
                        </div>
            
                    
                       
                        <div class="team-member equal-elem col">
                            <div class="media">
                                <a href="#" title="BRAUM">
                                    <figure><img src="/images/member-braum.jpg" alt="BRAUM"></figure>
                                </a>
                            </div>
                            <div class="info">
                                <b class="name">BRAUM</b>
                                <span class="title">Member</span>
                                <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
                            </div>
                        </div>
                         {{-- fin fila1 --}}
                        </div>
                        

                    </div>

                </div>

            </div>
        <!-- </div> -->
        

    </div><!--end container-->

</main>
<!--main area-->

@endsection