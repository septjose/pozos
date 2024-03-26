<template>
    <BaseComponent>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="card-title font-weight-bold">
                        <p class="text-muted">Bienvenido de nuevo</p>
                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                            <li class="breadcrumb-item active">Aforo y bombas Guzmán</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <Card v-for="modulo in modulos" :modulo="modulo"></Card>
        </div>
    </BaseComponent>
</template>

<script setup lang="ts">
import BaseComponent from '../Welcome.vue';
import Card from '../../Layouts/Card.vue';
import { Modulo } from '@/interfaces/modulos.interface';
import modulosJson from '../../database/modulos.json';
const modulos: Modulo[] = modulosJson;
</script>

<style scoped>
.blanco {
    background-color: white,
}

.boton_card {
    border: none;
    background-color: transparent;
}

.card_body {
    text-align: center;
}
</style>
