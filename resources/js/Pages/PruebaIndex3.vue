<template>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" :data-bs-target="'#' + modalId">
        Nuevo
    </button>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Prueba3
    </button>

    <table class="table table-success table-striped">
        <tr>
            <th>Check</th>
            <th>Id</th>
            <th>Input1</th>
            <th>Input2</th>
            <th>Input3</th>
            <th>Acciones</th>
        </tr>
        <tr v-for="(elm, index) in prueba.data">
            <td>
                <p>Checkbox</p>
            </td>
            <td>{{ elm.id_prueba }}</td>
            <td>{{ elm.input1 }}</td>
            <td>{{ elm.input2 }}</td>
            <td>{{ elm.input3 }}</td>
            <td>
                <button class="btn btn-ghost btn-xs" @click="mostrarModalEditar(elm)" data-bs-toggle="modal" :data-bs-target="'#' + modalId">
                    Editar
                </button>
                <button class="btn btn-ghost btn-xs" @click="mostrarModalEliminar(elm)" data-bs-toggle="modal" :data-bs-target="'#' + modalId">
                    Eliminar
                </button>

            </td>
        </tr>
    </table>
    <!--<input v-for="index in prueba.last_page" :key="index" class="join-item btn btn-square" type="radio"
                    name="options" :aria-label="index.toString()" :checked="currentPage === index" :value="index"
                    @change="updateCurrentPage" />-->

    <Modal2 v-if="modalId === 'PostModal'" :showModal="showModal" :modalId="modalId" :tituloModal="tituloModal">
        <div class="modal-body">
            <h1>Crear una prueba</h1>
            <form @submit.prevent="finalizar()">
                <label class="form-label" for="input1">Input 1:</label>
                <input class="form-control" type="hidden" id="id_prueba" v-model="data.id_prueba" required>
                <input class="form-control" type="text" id="input1" v-model="data.input1" required>
                <div v-if="errors && errors.input1">
                    <span class="error">{{ errors.input1[0] }}</span>
                </div>
                <label class="form-label" for="input2">Input 2:</label>
                <input class="form-control" type="text" id="input2" v-model="data.input2"  required>
                <div v-if="errors && errors.input2">
                    <span class="error">{{ errors.input2[0] }}</span>
                </div>
                <label class="form-label" for="input3">Input 3:</label>
                <select class="form-control" id="input3" v-model="data.input3" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
                <div v-if="errors && errors.input3">
                    <span class="error">{{ errors.input3[0] }}</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </Modal2>

<Modal2 v-if="modalId === 'DeleteModal'" :showModal="showModal" :modalId="modalId" :tituloModal="tituloModal">
<span>Estas seguro de eliminar es   te resgistro ? </span>
        <button class="btn btn-ghost btn-xs" @click="deletePruebaView(elementoSeleccionado)">Eliminar</button>
</Modal2>

    <Modal2 v-if="modalId === 'PutModal'" :showModal="showModal" :modalId="modalId" :tituloModal="tituloModal">
        <div class="modal-body">
            <h1>Editar una prueba</h1>
            <form @submit.prevent="editar()">
                <label class="form-label" for="input1">Input 1:</label>
                <input class="form-control" type="hidden" id="id_prueba" v-model="data.id_prueba" required>
                <input class="form-control" type="text" id="input1" v-model="data.input1" required>
                <div v-if="errors && errors.input1">
                    <span class="error">{{ errors.input1[0] }}</span>
                </div>
                <label class="form-label" for="input2">Input 2:</label>
                <input class="form-control" type="text" id="input2" v-model="data.input2"  required>
                <div v-if="errors && errors.input2">
                    <span class="error">{{ errors.input2[0] }}</span>
                </div>
                <label class="form-label" for="input3">Input 3:</label>
                <select class="form-control" id="input3" v-model="data.input3" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
                <div v-if="errors && errors.input3">
                    <span class="error">{{ errors.input3[0] }}</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </Modal2>

</template>

<script lang="ts" setup>
import axios from 'axios';
import { pruebaS } from "../services/pruebaS";
import Modal2 from "@/Layouts/Modal2.vue";
import {  onMounted, Ref,ref, watchEffect } from 'vue';
import IPrueba from "@/interfaces/Iprueba";
let prueba: Ref<Array<IPrueba>> = ref([]);

const showModal = ref(false);
const tituloModal=ref('');
const elementoSeleccionado:Ref<IPrueba>=ref(<Iprueba>{});

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


const data: Ref<IPrueba> = ref<IPrueba>({
    id_prueba: elementoSeleccionado.value ? elementoSeleccionado.id_prueba : '',
    input1: elementoSeleccionado.value ? elementoSeleccionado.input1 : '',
    input2: elementoSeleccionado.value ? elementoSeleccionado.input2 : '',
    input3: elementoSeleccionado.value ? elementoSeleccionado.input3 : '',
});



const finalizar = async () => {
console.log("DATA DE FINALIZAR",data);
await pruebaS.createPrueba(data);
        // Luego de crear la prueba, vuelves a cargar las pruebas para reflejar el cambio
       prueba.value = await pruebaS.getAllPruebas(1);
}

const editar=async()=>{
console.log('METODO EDITAR',data);
 await pruebaS.updatePrueba(data);
        // Luego de actualizar la prueba, vuelves a cargar las pruebas para reflejar el cambio
         prueba.value = await pruebaS.getAllPruebas(1);
}

const deletePruebaView=async (elemento: IPrueba)=>{
    console.log('Elemento seleccionado:', elemento);
    await pruebaS.deletePrueba(elemento);

};

const modalId = ref('');


const mostrarModalEditar = (elemento: any) => {

    console.log('Elemento seleccionado:', elemento);
    elementoSeleccionado.value = elemento;
    console.log('elementoSeleccionado.value', elementoSeleccionado.value);
        modalId.value = "PutModal";
    showModal.value = true;
    tituloModal.value="Editar una prueba";

watchEffect(() => {
    if (elementoSeleccionado.value) {
console.log('watch',elementoSeleccionado.value);
    data.id_prueba = elementoSeleccionado.value.id_prueba;
        data.input1 = elementoSeleccionado.value.input1;
        data.input2 = elementoSeleccionado.value.input2;
        data.input3 = elementoSeleccionado.value.input3;
    }
});

};

const mostrarModalEliminar = (elemento: any) => {
    console.log('Elemento seleccionado:', elemento);
    elementoSeleccionado.value = elemento;
     modalId.value = "DeleteModal";
    showModal.value = true;
    tituloModal.value="Eliminar una prueba";
};

const mostrarModalNuevo = () => {
    alert("abrir modal");
    console.log("ModalN", modalId.value, showModal.value);
    modalId.value = "PostModal";
    showModal.value = true;
tituloModal.value="Crear una prueba";

};


onMounted(async () => {
    try {
        prueba.value = await pruebaS.getAllPruebas(1);
        console.log("Imprimir en amounted", await pruebaS.getAllPruebas(1));


    } catch (error) {
        console.error('Error fetching data:', error);
    }
});

const updateCurrentPage = async (event: any) => {
    const currentP = parseInt(event.target.value);
    //await fetchPruebas(currentP);
    prueba.value = await pruebaS.getAllPruebas(currentP);
};

</script>

<style scoped></style>
