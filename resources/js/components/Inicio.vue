<template>
   <div>
        <table>
            <tbody>
                <tr v-for="p in json['productos']" :key="p['id']">
                    <td>{{p['id']}}</td>
                    <td>{{p['nombre']}}</td>
                    <td>{{p['foto']}}</td>
                </tr>
            </tbody>
        </table>

    </div>
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