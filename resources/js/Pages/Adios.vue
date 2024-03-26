<template>
    <!-- Utilizamos el componente Base como contenedor -->
    <BaseComponent>
      <!-- Aquí va el contenido específico del componente hijo -->
      <div>
        <h2>Contenido del Componente Hijo</h2>
        <p>Otro contenido...</p>
      </div>
    </BaseComponent>
  </template>
  
  <script>
  import BaseComponent from '/resources/js/Pages/Hola.vue';
  
  export default {
    components: {
      BaseComponent,
    },
  };
  </script>
  