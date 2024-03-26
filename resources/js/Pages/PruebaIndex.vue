<template>
    <h1>Listado de Pruebas</h1>
    <ul >
        <li v-for="(elm, index) in pruebas">{{elm.input1}}</li>
    </ul>
</template>

<script lang="ts" setup>
import { onMounted} from 'vue';
import PruebaService  from "@/services/PruebaService";

const servicio=new PruebaService()
const pruebas=servicio.getPruebas()
console.log("PRUEBAS VUE",pruebas);
onMounted(async ()=>{
    await servicio.fetchAll()
})
</script>

<style scoped>
</style>
