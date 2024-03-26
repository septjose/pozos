<template>
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <router-link to="/" class="text-lg font-bold">Laravel Vue 3</router-link>
                <div>
                    <router-link to="/" class="text-gray-600 hover:text-gray-800 px-4">Home</router-link>
                    <router-link to="/about" class="text-gray-600 hover:text-gray-800 px-4">About</router-link>
                    <router-link to="/contact" class="text-gray-600 hover:text-gray-800 px-4">Contact</router-link>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup lang="ts">
</script>

<style scoped>
</style>

