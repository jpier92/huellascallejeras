<template >
     <div name="form" class="mt-5"> 
        <form action="" @submit="checkForm" >

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tu nombre</label>
            <input v-model="formNotificacion.notifNombre" type="text" class="form-control" id="exampleFormControlInput1">
            <div class="my-1" style="color: red;">{{errorInputs.Nombre}}</div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tu Telefono</label>
            <input v-model="formNotificacion.notifTelefono" type="number" class="form-control" id="exampleFormControlInput1">
            <div class="my-1" style="color: red;">{{errorInputs.Telefono}}</div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tu correo electrónico</label>
            <input v-model="formNotificacion.notifEmail" type="email" class="form-control" id="exampleFormControlInput1">
            <div class="my-1" style="color: red;">{{errorInputs.Email}}</div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Asunto</label>
            <input v-model="formNotificacion.notifAsunto" type="text" class="form-control" id="exampleFormControlInput1">
            <div class="my-1" style="color: red;">{{errorInputs.Asunto}}</div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Tu mensaje</label>
            <textarea v-model="formNotificacion.notifMensaje" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="my-1" style="color: red;">{{errorInputs.Mensaje}}</div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-info btn-lg rounded-pill"><span class="text-light">Enviar</span></button>
        </div>
        </form>
        <ModalCargando />
    </div>
</template>
<script>
import { defineAsyncComponent } from 'vue';
import {mapState} from 'vuex';

export default {
    name: 'form',
    props:{
        form: String
    },
    components:{
        ModalCargando: defineAsyncComponent(()=> import(/* webpackChunkName:"ModalCargando"*/'../../shared/components/ModalCargando.vue')),
    },
    data(){
        return{
            formNotificacion:{
                tipoForm: this.form,
                notifNombre:'',
                notifTelefono:'',
                notifEmail:'',
                notifAsunto:'',
                notifMensaje:''
            },
            errorInputs:{},
        }
    },
    computed:{
        ...mapState('huellas',['adopcionId','registroAdopcion']),
    },
    methods:{
        mostrarModal(){
            this.$store.commit('huellas/isLoading',true);
            $('#staticBackdrop').modal('show');
         
        },
        async hideModal(){
            await new Promise((resolve) => {
                setTimeout(() => {
                    $('#staticBackdrop').modal('hide');
                    resolve('este es el valor que eventualmente devolverá la promesa');
                }, 4000);
            });
        },
        enviarMensaje(){
            console.log(this.formNotificacion);
            this.$store.dispatch('huellas/enviarMensaje',this.formNotificacion);
        },
        checkForm(e){
            this.errorInputs['Nombre']   = !this.formNotificacion.notifNombre   ? '* El nombre es obligatorio':'';
            this.errorInputs['Telefono'] = !this.formNotificacion.notifTelefono ? '* El telefono es obligatorio':'';
            this.errorInputs['Email']    = !this.formNotificacion.notifEmail    ? '* El email es obligatorio':'';
            this.errorInputs['Asunto']   = !this.formNotificacion.notifAsunto   ? '* El asunto es obligatorio':'';
            // this.errorInputs['Mensaje']  = !this.formNotificacion.notifMensaje  ? '* El mensaje es obligatorio':'';

            if(this.errorInputs.Nombre === '' && this.errorInputs.Telefono === '' && this.errorInputs.Email === '' && this.errorInputs.Asunto === ''){
                this.mostrarModal();
                setTimeout(()=>{
                    this.enviarMensaje();
                },3000);
            }
            e.preventDefault();  
        },
        scrollToTop() {
            window.scrollTo(0, 0); // Esto posicionará el scroll al inicio (arriba)
        },
        limpiarCampos(){
            this.formNotificacion.notifNombre   = '';
            this.formNotificacion.notifTelefono = '';
            this.formNotificacion.notifEmail    = '';
            this.formNotificacion.notifAsunto   = '';
            this.formNotificacion.notifMensaje  = '';
        }
     },
     watch:{
        'registroAdopcion':async function(){
            if(this.registroAdopcion !== null){
                await this.hideModal();
                if(this.registroAdopcion){
                    this.scrollToTop();
                    this.limpiarCampos();
                }
                this.$store.commit('huellas/registroAdopcion',null);
            }    
        },
        'formNotificacion.notifNombre': function(){
            if(this.formNotificacion.notifNombre){
                this.errorInputs.notifNombre = '';
            }else{
                this.errorInputs.notifNombre = '* El nombre es obligatorio';
            }
        },
        'formNotificacion.notifTelefono': function(){
            if(this.formNotificacion.notifTelefono){
                this.errorInputs.notifTelefono = '';
            }else{
                this.errorInputs.notifTelefono = '* El teléfono es obligatorio';
            }
        },
        'formNotificacion.notifEmail': function(){
            if(this.formNotificacion.notifEmail){
                this.errorInputs.notifEmail = '';
            }else{
                this.errorInputs.notifEmail = '* El email es obligatorio';
            }
        },
        'formNotificacion.notifAsunto': function(){
            if(this.formNotificacion.notifAsunto){
                this.errorInputs.notifAsunto = '';
            }else{
                this.errorInputs.notifAsunto = '* El asunto es obligatorio';
            }
        },
        // 'formNotificacion.notifMensaje': function(){
        //     if(this.formNotificacion.notifMensaje){
        //         this.errorInputs.notifMensaje = '';
        //     }else{
        //         this.errorInputs.notifMensaje = '* El nombre es obligatorio';
        //     }
        // },
     }
    }
</script>
<style lang="">
    
</style>