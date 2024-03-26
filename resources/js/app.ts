
//import "../assets/css/bootstrap.min.css"
// Importa todos los archivos CSS de la carpeta 'assets/styles'


async function importAllCSS() {
    const cssFiles = import.meta.glob('../assets/**/*.{js,css,woff,woff2,ttf,svg,png,jpg,jpeg,gif}');
    console.log(cssFiles)
    const keys = Object.keys(cssFiles);
    for (const key of keys) {
      await cssFiles[key]();
    }
  }

  importAllCSS();


import { createApp, h, DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createPinia } from 'pinia';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import router from './routes/index';
import './bootstrap';
//import  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css';
//import 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js';


const pinia = createPinia();



const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(pinia)
            .use(router)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
