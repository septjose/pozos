<template>

  <div :id="modalId"  class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{tituloModal}}</h1>
          <button type="button" class="btn-close"  aria-label="Close"></button>
        </div>
<slot></slot>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</template>

<script lang="ts" setup>
import { defineProps } from 'vue';
  const props = defineProps({
      showModal: {
        type: Boolean,
        default: true // Inicialmente, el modal está cerrado
      },
      modalId:{
  type:String,
  required:true
      },
      tituloModal:{
type:String,
required:true
      }

  });

  console.log("MODAL ID",props.modalId);
</script>

<style scoped>
</style>
