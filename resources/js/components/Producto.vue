<template>
    <ul class="product-list grid-products equal-container">
        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 " v-for="p in json['productos']" :key="p['id']">
            <div class="product product-style-3 equal-elem ">
                <div class="product-thumnail">
                    <a href="" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure>
                            <img :src="'http://127.0.0.1:8000/storage/productos/'+p['foto']" :alt="p['nombre']" width="150"/>
                        </figure>
                    </a>
                </div>
                <div class="product-info">
                     <h4 class="widget-title"></h4>
                    <span>{{ p["descripcion"] }}</span>
                    <div class="wrap-price">
                        <span class="product-price">${{ p["precio"] }}</span>
                    </div>
                    <a href="#" class="btn add-to-cart">Añadir a carrito</a>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
/*
    archivo json,
    tipo->productos, categorias, proveedores,
    json['tipo']-->es una lista de objetos de tipo


*/
import axios from "axios";

export default {
    data() {
        return {
            json: this.getJson
        };
    },
    mounted() {
        this.getJson();
    },
    methods: {
        getJson() {
            axios
                .get("http://127.0.0.1:8000/api/consumir")
                .then(response => {
                    this.json = response.data;
                })
                .catch(e => console.log(e));
        }
    }
};
</script>

<style></style>
