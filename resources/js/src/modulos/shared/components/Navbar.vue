<template>
<div class="main-header">
    <nav class="navbar navbar-expand-sm navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="circular--landscape">
                    <img src="/assets/huellas/img/huellasCallejeras.jpg" style="width: 75px;" alt="">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link active" :to="{name:'home'}">Inicio</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name:'nosotros'}" >Nosotros</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name:'adopta'}" >Adopta un amigo</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name:'involucrate'}" >Involucrate</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name:'contacto'}" >Contacto</router-link>
                </li>
                <li class="nav-item">
                    <div class="btn-aporte">
                        <router-link class="nav-link" :to="{name:'haz-tu-aporte'}" >Haz tu aporte</router-link>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </nav>    
</div>

    <div>
        <!-- <router-link :to="{name:'home'}" >Casa</router-link>
        <router-link :to="{name:'adopta'}" >Adopta</router-link>
        <router-link :to="{name:'nosotros'}" >Nostrosos</router-link>
        <router-link :to="{name: 'animal-id', params:{id:12}}" >Animal Id</router-link> -->
            <!-- <CustomLink v-for="link in links" :key="link.to" :link="link" /> -->
    </div>
</template>

<script>
import { defineAsyncComponent } from 'vue';

export default {
   components:{
    //lazyLoad
    // CustomLink: defineAsyncComponent(() => import('./CustomLink.vue'))
   },
   data(){
    return{
        links:[
            {to: 'home', name:'Inicio'},
            // {to: 'animal-id', name:'Animal por Id', id:50},
            {to: 'adopta', name:'Adota un amigo', id:50},
            {to: 'nosotros', name:'Nosotros'},
            {to: 'involucrate', name:'Involucrate'},
            {to: 'contacto', name:'Contacto'},
            {to: 'haz-tu-aporte', name:'Haz tu aporte'},



            // {to: 'https://www.google.com ', name:'Google'},

        ]
    }
   }
}
</script>

<!-- scoped es para que los estilos se aplique solo a este template -->
<style scoped>

  
    .main-header{
        background-color: #ffff;
        /* height: 72px; */
        /* width: 100%;
        display: flex;
        justify-content: space-between; */
        /* padding: 0px 300px 0px 300px; */
        box-shadow: 0px 0px 10px;
    }
    .content-nav{
        height: auto;
        display: flex;
        align-items: center;
        padding-top: 10px;
        padding-bottom: 10px;

    }
    .btn-aporte{
        background-color: #32abad;
        border-radius: 22px;
    }

    /* .circular--landscape {
        display: inline-block;
        position: relative;
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 50%;
    } */
    .circular--landscape img {
        border-radius: 50%;
    }

    div{
        padding: 0 30px;
    }

    .nav-link{
        font-size: 16px !important;
        font-weight: bold;
        color: darkslategrey;
        margin: 0 10px;
    }
/* 
    div .router-link-exact-active{
        color: chartreuse;
    } */

</style>