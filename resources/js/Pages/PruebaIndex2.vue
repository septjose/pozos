<template>
    <h1>Listado de Pruebas</h1>
 <RouterView />
    <table class="table-primary">
        <tr>
            <th>Id prueba</th>
            <th>Input1</th>
            <th>Input2</th>
            <th>Input3</th>
            <th>Acciones</th>
        </tr>
        <tr v-for="(elm, index) in pruebas">
            <td>{{ elm.id_prueba }}</td>
            <td>{{ elm.input1 }}</td>
            <td>{{ elm.input2 }}</td>
            <td>{{ elm.input3 }}</td>
            <td>
                <router-link :to="{ name: 'PruebaVer', params: { id_prueba: elm.id_prueba} }">
                    Ver
                </router-link>

<button @click="eliminar(elm)">Eliminar</button>
               <!-- <router-link :to="{ name: 'editar', params: { prueba: elm.id_prueba } }">Editar</router-link>
                <router-link :to="{ name: 'eliminar', params: { prueba: elm.id_prueba } }">Eliminar</router-link>-->
            </td>
        </tr>
    </table>


    <!-- <PruebaVer :prueba="prueba" /> -->

</template>

<script lang="ts" setup>

import { Ref, ref, onMounted } from 'vue';
import PruebaService from "@/services/PruebaService";
import PruebaVer from './PruebaVer.vue';
import IPrueba from "@/interfaces/Iprueba";
import { router } from '@inertiajs/vue3';

const servicio = new PruebaService()
const pruebas = servicio.getPruebas()
let prueba: Ref<IPrueba> = ref({});

console.log("PRUEBAS VUE", pruebas);

onMounted(async () => {
    await servicio.fetchAll()
})

// const ver = (elm: IPrueba) => {
//     alert('oprimio el boton de ver');
//     prueba.value = elm;
//     console.log(elm);
// }

// const editar = (elm: IPrueba) => {
//     alert('oprimio el boton de editar');
//     prueba.value = elm;
//     console.log(elm);
// }

 const eliminar = async (elm: IPrueba) => {
     alert('oprimio el boton de eliminar'+ elm.id_prueba);
    router.post(route('prueba.destroy', { id_prueba: elm.id_prueba }));
     /*prueba.value = elm;
     console.log('bbb',elm.id_prueba);
const servicio_eliminado= await servicio.deletePrueba(elm);
console.log(servicio_eliminado);*/

 }
</script>

<style scoped></style>
