<template>
    <div class="container my-3">
        <h6 class="">Inicio/Adopta un amigo</h6>
            <h5>Adopta un amigo </h5>
            <div class="row my-3">
                <div v-for="(adopcion, index) in adopciones" :key="adopcion.id" class="col col-sm-1 col-md-4 py-3 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="width: 286px; height: 262px;" :src="adopcion.url_imagen" :alt="adopcion.url_imagen">
                        <div class="card-body">
                            <h4 class="card-title">{{adopcion.nombre}}</h4>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <router-link class="btn btn-info" :to="{name:'animal-id', params:{id: index}}" ><span class="text-light"><strong>Mas Información</strong> </span></router-link>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>
<script>
import {mapState} from 'vuex';  
export default {
    data(){
        return {
            dataAdopciones:[]
        }
    },
    computed:{
        ...mapState('huellas',['adopciones'])
    },
    methods:{
    },
    created(){
    
    }
}
</script>
<style>
    
</style>