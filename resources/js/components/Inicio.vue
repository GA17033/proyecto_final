<template>
  <main id="main">
    <div class="container">	

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="/images/main-slider-1-1.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-1">
                        <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                        <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                        <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="/images/main-slider-1-2.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-2">
                        <h2 class="f-title">Extra 25% Off</h2>
                        <span class="f-subtitle">On online payments</span>
                        <p class="discount-code">Use Code: #FA6868</p>
                        <h4 class="s-title">Get Free</h4>
                        <p class="s-subtitle">TRansparent Bra Straps</p>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="/images/main-slider-1-3.jpg" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                        <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="/images/home-1-banner-1.jpg" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="/images/home-1-banner-2.jpg" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>
        <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box">Ultimo en Venta</h3>
            <div class="wrap-countdown mercado-countdown" data-expire="2022/12/12 12:34:56"></div>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
              
                <!-- productos -->
                <div class="product product-style-2 equal-elem ">
                    
                <ul class="product-list grid-products equal-container">
                  <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 " v-for="p in json['productos']" :key="p['id']">
                    
                    <div class="product-thumnail">
                        <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img :src="'/storage/productos/'+p['foto']" :alt="p['nombre']" class="img-fluid" width="90px"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">Venta</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">Detalles</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <!--a href="#" class="product-name"><span>{{ $producto->descripcion_producto }}</span></a-->
                        <div class="wrap-price"><ins><p class="product-price"><span class="product-price">${{ p["precio"] }}</span></p></ins> <del><p class="product-price">$1000.00</p></del></div>
                    </div>

                  </li>
                </ul>
                </div>
                
                <!--  -->
            </div>
            
        </div>

        

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Categorias De Productos</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                         <ul class="list-style vertical-list list-limited" data-show="6" >
                            <li class="list-item" v-for="cat in json['categorias']" :key="cat['id']">
                            <a href="#fashion_1a" class="tab-control-item"> {{cat['nombre']}}</a>
                            </li>
                         </ul>
                    </div>
                <div class="tab-contents">

                        <div class="tab-content-item active" id="fashion_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                

                                    <div class="product product-style-2 equal-elem ">  
                                         <ul class="list-style vertical-list list-limited" data-show="6" >
                                            <li class="list-item" v-for="cat in json['categorias']" :key="cat['id']">   
                                            <div class="product-thumnail">
        
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img :src="'/storage/categorias/'+cat['imagen']" :alt="cat['nombre']" width="800" height="800" ></figure>
                                                </a>
                                           
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            </li>
                                         </ul>
                                        
                                         <ul class="list-style vertical-list list-limited" data-show="6" >
                                            <li class="list-item" v-for="cat in json['categorias']" :key="cat['id']"> 
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>{{cat['nombre']}}</span></a>
                                        
                                            </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                              
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                   
            </div>			
        
        </div>
        
        <!--  -->
    </div>

</main>

</template>

<script>
/*
    archivo json,
    tipo->productos, categorias, proveedores,
    json['tipo']-->es una lista de objetos de tipo
          {{--  --}}

*/
import axios from "axios";

export default {
  data() {
    return {
      json: this.getJson,
    };
  },
  mounted() {
    this.getJson();
  },
  methods: {
    getJson() {
      axios
        .get("http://127.0.0.1:8000/api/consumir")
        .then((response) => {
          this.json = response.data;
          //console.log(this.json)
        })
        .catch((e) => console.log(e));
    },
  },
};
</script>

<style>

</style>