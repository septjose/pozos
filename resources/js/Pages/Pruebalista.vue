<template>
    <div>
        <div class="bg-blue-500 flex items-center justify-center">
            <h3>Formulario para agregar más a la tabla</h3>
            <FormularioView :elementoSeleccionado="elementoSeleccionado"  :tipo_boton="tipo_boton"/>
        </div>

        <div class="flex justify-center items-center">
            <div class="container bckgnd m-7 d-flex align-items-center justify-content-center">

                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <label>
                                        <input type="checkbox" class="checkbox" />
                                    </label>
                                </th>
                                <th>Id prueba</th>
                                <th>Input1</th>
                                <th>Input2</th>
                                <th>Input3</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(elm, index) in prueba.data">
                                <td>
                                    <label>
                                        <input type="checkbox" class="checkbox" />
                                    </label>
                                </td>
                                <td>{{ elm.id_prueba }}</td>
                                <td>{{ elm.input1 }}</td>
                                <td>{{ elm.input2 }}</td>
                                <td>{{ elm.input3 }}</td>
                                <td>
                                    <button class="btn btn-ghost btn-xs" @click="mostrarModalEditar(elm)">
                                        Editar
                                    </button>
                                    <button class="btn btn-ghost btn-xs" @click="mostrarModalEliminar(elm)">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Id prueba</th>
                                <th>Input1</th>
                                <th>Input2</th>
                                <th>Input3</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!--<pre>{{ prueba.last_page }}</pre>-->
        <!-- Paginación -->
        <div class="flex justify-center items-center">
            <!-- Pagination -->
            <div class="join">
                <input v-for="index in prueba.last_page" :key="index" class="join-item btn btn-square" type="radio"
                    name="options" :aria-label="index.toString()" :checked="currentPage === index" :value="index"
                    @change="updateCurrentPage" />
            </div>
            <!-- <Pagination :paginas="paginas" :currentPage="current_page" @updatePage="actualizarPagina" class="flex justify-center items-center" /> -->
        </div>
    </div>
    <div>
        <Modal  v-if="modalVue.modal === ModalType.Editar" :showModal="modalVue.open"   @close="closeModal">
            <FormularioView  :elementoSeleccionado="elementoSeleccionado"  :tipo_boton="tipo_boton"  />
        </Modal>
    </div>
<div>

    <Modal v-if="modalVue.modal === ModalType.Eliminar" :showModal="modalVue.open" @close="closeModal">
        <span>Estas seguro de eliminar es   te resgistro ? </span>
        <button class="btn btn-ghost btn-xs" @click="deletePruebaView(elementoSeleccionado)">Eliminar</button>

    </Modal>

</div>




</template>

<script setup lang="ts">
import FormularioView from "@/Pages/FormularioView.vue";
import Modal from "../Layouts/Modal.vue";
import { reactive, ref, onMounted } from "vue";
import { usePruebaStore } from "../stores/prueba.store";
import { useModalStore } from "../stores/modal.store";
import { Prueba } from './../interfaces/Iprueba';
const { deletePrueba, currentPage, prueba, fetchPruebas } = usePruebaStore();

const {modalVue,closeModal}=useModalStore();

const elementoSeleccionado = ref(<Prueba>{});

const tipo_boton=ref('Post')

enum ModalType{
    "Editar",
    "Eliminar",
    "Nuevo"
}
const mostrarModalEditar = (elemento: any) => {

  console.log('Elemento seleccionado:', elemento);
elementoSeleccionado.value = elemento;
 console.log('elementoSeleccionado.value', elementoSeleccionado.value);
tipo_boton.value="Put";
    modalVue.open=true;
    modalVue.modal=ModalType.Editar;
};


const deletePruebaView=async (elemento: any)=>{
    console.log('Elemento seleccionado:', elemento);
    await deletePrueba(elemento);
    closeModal();
};

const mostrarModalEliminar= (elemento: any)=>{

  console.log('Elemento seleccionado:', elemento);
elementoSeleccionado.value = elemento;
 console.log('elementoSeleccionado.value', elementoSeleccionado.value);
tipo_boton.value="Delete";
modalVue.open=true;
  modalVue.modal=ModalType.Eliminar;
};


const updateCurrentPage = async (event: any) => {

    const currentP = parseInt(event.target.value);
    await fetchPruebas(currentP);
};

onMounted(async () => {
    try {
       await fetchPruebas();

    } catch (error) {
        console.error('Error fetching data:', error);
    }
});

</script>

<style scoped></style>
