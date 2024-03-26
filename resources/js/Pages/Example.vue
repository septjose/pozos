<template>
    <h1>Example Page Title</h1>

    <Example1
 :message="'clase1'">
            <Example2>
                <h1>Example 2</h1>
            </Example2>
 </Example1>

 <Example1
 :message="'clase2'">
            <Example2>
                <h1>Example 2</h1>
            </Example2>
 </Example1>
 <Example1
 :message="'clase3'">
            <Example2>
                <h1>Example 2</h1>
            </Example2>
 </Example1>

</template>

<script setup lang="ts">
import { ref } from "vue";
import Example1 from "../Components/Example/Example1.vue";
import Example2 from "../Components/Example/Example2.vue";
</script>

<style scoped></style>
