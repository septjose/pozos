<template>
    <h1>{{ msg }}</h1>
<input type="text" v-model="msg">
</template>

<script setup lang="ts">
import { ref } from 'vue';

const msg = ref('Hello, Vue 3!')
</script>


<style scoped></style>
