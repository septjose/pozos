<template>
    <dialog class="modal modal-bottom sm:modal-middle"  :open="showModal"   @close="closeModal">
      <div class="modal-box">
        <div class="content">
          <slot></slot>
<!--<pre>{{elementoSeleccionado}}</pre>-->
        </div>
        <div class="modal-action">
          <form method="dialog">
            <!-- Botón para cerrar el modal -->
            <button class="btn" @click="closeModal">Cerrar</button>
          </form>
        </div>
      </div>
    </dialog>
  </template>

  <script setup lang="ts">
  import { defineProps, ref } from 'vue';
import { useModalStore } from "../stores/modal.store";
const {modalVue, openModal, closeModal}=useModalStore();

  const props = defineProps({
    showModal: {
      type: Boolean,
      default: false // Inicialmente, el modal está cerrado
    },

  });




  </script>

  <style scoped>
  /* Estilos CSS omitidos */
  </style>
