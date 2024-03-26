<template>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure>
                            <img src="/logo_abg.png" alt="sing up image" />
                        </figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Iniciar sesión</h2>
                        <form
                        @submit.prevent="iniciar_sesion"
                            class="register-form"
                        >
                            <div class="form-group">
                                <label for="your_name"
                                    ><i class="zmdi zmdi-email"></i
                                ></label>
                                <input type="hidden" name="_token" :value="csrfToken">
                                <input
                                    v-model="form.email"
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="Email"
                                />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"
                                    ><i class="zmdi zmdi-lock"></i
                                ></label>
                                <input
                                    v-model="form.password"
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Contraseña"
                                />
                            </div>

                            <div class="form-group form-button">
                                <!--<input

                                    type="submit"
                                    name="signin"
                                    id="signin"

                                    value="Iniciar sesión"
                                />-->
                                <button  class="form-submit" type="submit">Iniciar sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'

const csrfToken = ref<string | null>(null);

    onMounted(async () => {
    try {
        const response = await fetch('/csrf-token');
        const { csrf_token } = await response.json();
        csrfToken.value = csrf_token;
    } catch (error) {
        console.error('Error al obtener el token CSRF:', error);
    }
});


const form = useForm({
    email: '',
    password: '',
});


const iniciar_sesion = () => {
    alert(form);
   //form.get(route('prueba.store'))
    form.post(route('prueba.store'));
};

</script>

<style scoped>
@import "/resources/assets/css/login/css/style.css";
@import "/resources/assets/css/login/fonts/material-icon/css/material-design-iconic-font.min.css";
</style>
