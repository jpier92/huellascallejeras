import './bootstrap';
import { createApp } from 'vue'
import store from "./src/modulos/store"
import App from './src/App.vue';
import router from './src/router/routes';

createApp(App)
        .use(store)
        .use(router)
        .mount('#app')