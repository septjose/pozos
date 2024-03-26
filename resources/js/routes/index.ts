import { RouteRecordRaw, createRouter, createWebHistory } from 'vue-router';
import PruebaVer from '@/Pages/PruebaVer.vue';

const routes : Array<RouteRecordRaw> = [
    {
        path: '/prueba_ver/:id_prueba',
        name: 'PruebaVer',
        component: PruebaVer
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
