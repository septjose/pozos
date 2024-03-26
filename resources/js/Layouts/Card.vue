<template>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3">
                    <div class="card shadow-lg rounded border-0 blanco" >
                        <div class="card-header blanco" >
                           <button type="button" class="btn-info float-end fs-xxs boton_card" aria-label="Información" >
                                    <i class="bi bi-info-circle"></i>
                                </button>

                            <h6 class="card-title mb-0">{{ props.modulo.nombre }}</h6>
                        </div>
                        <div class="card-body p-3 text-center">
                            <div class="mx-auto avatar-lg mb-0">
                                <img :src="props.modulo.img" alt=""
                                    class="img-fluid rounded-circle">
                            </div>
                            <h5 class="card-title mb-1">{{ props.modulo.descripcion }}</h5>

                        </div>
                        <div class="card-footer text-center blanco" >
                              <a :href="props.modulo.url" class="btn btn-primary btn-block">Ver más</a>
                        </div>
                    </div>
                </div>

</template>

<script setup lang="ts" >
import { defineProps } from 'vue'
import { Modulo } from '../interfaces/modulos.interface';

const props= defineProps(
    {
        modulo:{
            type: Object as () => Modulo,
            required: true
        },
    }

)

</script>

<style scoped>
.blanco{
    background-color: white,
}

.btn-info{
    background-color: transparent;
    border: none;

}

.card_body{
text-align: center;
}

</style>

