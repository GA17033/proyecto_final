<template>
        <ul class="list-style vertical-list list-limited" data-show="6" >
            <li class="list-item" v-for="p in json['categorias']" :key="p['id']">
                <a class="filter-link active" href="#">{{ p["nombre"] }}</a>
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
