<template>
  <!-- Botón para abrir el modal -->
  <button @click="mostrarModal">Abrir Modal</button>

  <!-- Modal -->
  <div v-if="modalVisible" class="modal">
    <div class="modal-content">
      <span @click="cerrarModal" class="close">&times;</span>
      <p>Contenido del Modal</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      modalVisible: false  // Variable para controlar la visibilidad del modal
    };
  },
  methods: {
    // Método para mostrar el modal
    mostrarModal() {
      this.modalVisible = true;
    },
    // Método para cerrar el modal
    cerrarModal() {
      this.modalVisible = false;
    }
  }
};
</script>

<style>
/* Estilos del modal (pueden variar dependiendo de tu diseño) */
.modal {
  display: none;  /* Por defecto, el modal está oculto */
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
