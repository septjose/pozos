<template>
    <div>
      <header>
        <!-- Aquí va el contenido del header -->
        <h1>Header del Componente Base</h1>
        <h2>Hola</h2>
      </header>
  
      <!-- Utilizamos una ranura (slot) para el contenido específico de cada componente hijo -->
      <slot></slot>
  
      <footer>
        <!-- Aquí va el contenido del footer -->
        <p>Footer del Componente Base</p>
        <h2>footer</h2>
      </footer>
    </div>
  </template>
  