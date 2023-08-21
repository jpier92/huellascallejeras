import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.bundle.min.js'

import { createApp } from 'vue'
import App from './src/App.vue';
import router from './src/router/routes';

createApp(App)
        .use(router)
        .mount('#app')