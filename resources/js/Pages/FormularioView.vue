<template>
    <form @submit.prevent="tipo_boton === 'Post' ? finalizar() : editar()">
        <label for="input1">Input 1:</label>
        <input type="hidden" id="id_prueba" v-model="data.id_prueba" required>
        <input type="text" id="input1" v-model="data.input1" required>
        <div v-if="errors && errors.input1">
            <span class="error">{{ errors.input1[0] }}</span>
        </div>
        <label for="input2">Input 2:</label>
        <input type="text" id="input2" v-model="data.input2" required>
        <div v-if="errors && errors.input2">
            <span class="error">{{ errors.input2[0] }}</span>
        </div>
        <label for="input3">Input 3:</label>
        <select class="form-control"  id="input3" v-model="data.input3" required>
    <option value="1">Sí</option>
     <option value="0">No</option>
        </select>
        <div v-if="errors && errors.input3">
            <span class="error">{{ errors.input3[0] }}</span>
        </div>
        <button v-if="tipo_boton === 'Post'" type="submit">Guardar</button>
        <button v-else-if="tipo_boton === 'Put'" type="submit">Editar</button>
        <!--<pre>{{elementoSeleccionado}}</pre>-->
    </form>

    <div v-if="errors">
        <ul>
            <li v-for="(error, key) in errors" :key="key">{{ error[0] }}</li>
        </ul>
    </div>

</template>

<script lang="ts" setup>
import axios from 'axios';

import { onUpdated, onBeforeUpdate, onMounted, ref, reactive, watchEffect } from 'vue';
import { defineProps } from 'vue';
import { usePruebaStore } from "../stores/prueba.store";
import { Prueba } from "./../interfaces/Iprueba";
const { updatePrueba } = usePruebaStore();

interface errors {
    input1: string[];
    input2: string[];
    input3: string[];
}

const errors = ref(<errors>{
    input1: [],
    input2: [],
    input3: [],
});



const props = defineProps({
    elementoSeleccionado: {
        type: Object,
    },
    tipo_boton: {
        type: String,
        required: true
    }
});



const data: Prueba = reactive<Prueba>({
    id_prueba: props.elementoSeleccionado ? props.elementoSeleccionado.id_prueba : '',
    input1: props.elementoSeleccionado ? props.elementoSeleccionado.input1 : '',
    input2: props.elementoSeleccionado ? props.elementoSeleccionado.input2 : '',
    input3: props.elementoSeleccionado ? props.elementoSeleccionado.input3 : '',
});



const finalizar = () => {
    axios.post('/prueba', data)
        .then(response => {
            console.log(response.data);
        })
        .catch(error => {
            errors.value = error.response.data.errors;
            console.log(error);
        });
}

const editar=()=>{
updatePrueba(data);
}

watchEffect(() => {
    if (props.elementoSeleccionado) {
    data.id_prueba = props.elementoSeleccionado.id_prueba;
        data.input1 = props.elementoSeleccionado.input1;
        data.input2 = props.elementoSeleccionado.input2;
        data.input3 = props.elementoSeleccionado.input3;
    }
});

</script>

<style scoped>
@import "daisyui/dist/full.css";
</style>
