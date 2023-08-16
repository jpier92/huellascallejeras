import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
// import Example from './components/Example.vue';
import  Prueba from '../components/Prueba.vue';


const app = createApp({
    components:{
        Prueba
    }
}).mount('#app')