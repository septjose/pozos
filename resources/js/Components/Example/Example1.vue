<template>
    <NavBar></NavBar>
    <slot></slot>

    <div :class="message" >
        <p>{{ message }}</p>
    </div>
    <div :class="message" >
        <p>{{ message }}</p>
    </div>
    <div :class="message" >
        <p>{{ message }}</p>
    </div>

</template>
<script setup lang="ts">
import NavBar from '../../Layouts/NavBar.vue';
const props= defineProps( {
    message: String
});


</script>

<style scoped>
div {
    background-color: red;
}

.clase1 {
    color: white;
}
.clase2 {
    color: rgb(122, 60, 60);
}
.clase3 {
    color: rgb(47, 88, 165);
}
</style>
