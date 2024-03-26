<template>
    <h1>Post Detail</h1>
    <div class="post-container">
        <div class="post-card">
            <h3>ID: {{ prueba.id_prueba }}</h3>
            <p>INPUT 1:{{ prueba.input1 }}</p>
        </div>
        <router-link to="">Volver atrás</router-link>
    </div>
</template>

<script lang="ts" setup>
import { onMounted, onUpdated } from 'vue';
import { useRoute } from 'vue-router';
import PruebaService from "@/services/PruebaService";

// const props = defineProps({
//     prueba: {
//         type: Object,
//         required: true
//     }
// });

const servicio = new PruebaService();
const prueba = servicio.getPrueba();

onMounted(async () => {
    console.log('entro a onMounted');
    const route = useRoute();
    let id_prueba = route.params.id_prueba;
    //alert('imprimo desde ver');
    await servicio.fetchById(id_prueba);
    //alert('imprimo desde ver'+ prueba.value.input2);
});

// onUpdated(async () => {
//     console.log('entro a onUpdated');
//     const route = useRoute();
//     let id_prueba = route.params.id_prueba;
//     //alert('imprimo desde ver');
//     await servicio.fetchById(id_prueba);
//     //alert('imprimo desde ver'+ prueba.value.input2);
// });


</script>

<style scoped>
.post-container {
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.post-card {
    padding: 25px;
    width: 750px;
    border-radius: 15px;
    border: 1px solid #ccc;
}

.link {
    margin-top: 25px;
    color: #06ce8b;
    text-decoration: none;
}

.link:hover {
    text-decoration: underline;
}
</style>
