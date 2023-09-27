<template>
    <div class="container mb-3 ">
        <div class="row my-2">
            <div class="col text-center">
                <img style="width: 400px; border-radius: 50%;" src="/assets/huellas/img/huellasCallejeras.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 d-flex align-items-center">
                <div class="px-3">
                    <h5>Contactanos</h5>
                    <p>Para mayor información, consultas o requerimientos comunícate con nosotros a través de nuestros datos de contactos.</p>
                    <div class="row">
                        <div class="col justify-content-center d-flex align-items-center">
                            <img src="/assets/huellas/img/Contact-icon22.png" alt="">
                        </div>
                        <div class="col d-flex  align-items-center">
                            <div class="text-start">    
                                <h5>Correo electrónico</h5> 
                                <p>contacto@huellascallejeraslumaco.cl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <FormContacto form="Contacto"/>
            </div>
        </div>
    </div>
</template>
<script>
import { defineAsyncComponent } from 'vue';

export default {        
    components:{
        FormContacto: defineAsyncComponent(()=> import(/* webpackChunkName:"Navbar"*/'./../../shared/components/FormContacto.vue')),
    }
}
</script>
<style>
    
</style>