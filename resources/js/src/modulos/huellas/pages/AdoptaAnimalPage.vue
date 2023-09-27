<template>
    <div>{{ getAnimalIdAdopcion}}</div>
    <div class="container my-5">
        <div class="row mb-5 pb-5">
            
            <div class="col d-flex justify-content-center align-items-center">
                <img class="card-img-top" style="border-radius: 10%; width: 400px; height: 400px;" :src="adopcionId.url_imagen" :alt="adopcionId.url_imagen">
            </div>
            <div class="col d-flex flex-column">
                <div class="my-3">
                    <h3>Mi nombre es <strong>{{ adopcionId.nombre }}</strong></h3>
                    <p>¿Estás listo para cambiar una vida hoy? 🐾 <span v-if="adopcionId.sexo === 'M'">. El es</span> <span v-else> Ella es</span>
                        {{adopcionId.personalidad}} ❤️ 
                    </p>
                    <p>Te dejamos sus datos:</p>
                    <ul class="list-group list-group-flush">
                        <li v-for="(item, key,index) in datosAnimal" :key="index" class="list-group-item"><span class="fw-bold">{{ key }}</span> : {{ item }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <h3>Dejanos tus datos!</h3>
        <div name="datos" class="my-4 border rounded" style="background-color: rgba(241, 241, 241, 0.89);">
                <form action="" @submit="checkForm" >
                    <div name="form-datos-adopta" class="p-3">
                        <div class="alert alert-info" role="alert">Nosostros tomaremos tus datos y te contacteremos!</div>
                        <div class="mb-3">
                            <label for="inputAdoptaRut" class="form-label">Rut</label>
                            <input v-model="adopta.adoptaRut" type="text" class="form-control" id="inputAdoptaRut" placeholder="12345678-9">
                            <div class="my-1" style="color: red;">{{errorInputs.Rut}}</div>
                        </div>    
                        <div class="mb-3">
                            <label for="inputAdoptaNombres" class="form-label">Nombres</label>
                            <input v-model="adopta.adoptaNombres" type="text" class="form-control" id="inputAdoptaNombres" placeholder="Juan Pedro">
                            <div class="my-1" style="color: red;">{{errorInputs.Nombres}}</div>
                        </div>
                        <div class="mb-3">
                            <label for="inputAdoptaApellidos" class="form-label">Apellidos</label>
                            <input v-model="adopta.adoptaApellidos" type="text" class="form-control" id="inputAdoptaApellidos" placeholder="Perez Lopez">
                            <div class="my-1" style="color: red;">{{errorInputs.Apellidos}}</div>
                        </div>
                        <div class="mb-3">
                        <label for="inputAdoptaDireccion" class="form-label">Direccion</label>
                        <input v-model="adopta.adoptaDireccion" type="text" class="form-control" id="inputAdoptaDireccion" placeholder="Pasaje las flores 519">
                        <div class="my-1" style="color: red;">{{errorInputs.Direccion}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputAdoptaComuna" class="form-label">Comuna</label>
                        <input v-model="adopta.adoptaComuna" type="text" class="form-control" id="inputAdoptaComuna" placeholder="Lumaco">
                        <div class="my-1" style="color: red;">{{errorInputs.Comuna}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputAdoptaTelefono" class="form-label">Telefono</label>
                        <input v-model="adopta.adoptaTelefono" type="number" class="form-control" id="inputAdoptaTelefono" placeholder="988556611">
                        <div class="my-1" style="color: red;">{{errorInputs.Telefono}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputAdoptaEmail" class="form-label">Correo Electrónico</label>
                        <input v-model="adopta.adoptaEmail" type="email" class="form-control" id="inputAdoptaEmail" placeholder="juanpedro@gmail.com">
                        <div class="my-1" style="color: red;">{{errorInputs.Email}}</div>
                    </div>
                    <div class="d-grid gap-2 ">
                        <button class="btn btn-info btn-lg rounded-pill" ><span class="text-light">Adoptar!</span></button>
                    </div>
                </div>
            </form>
        </div>
        <ModalCargando />
    </div>
</template>
<script>
import {mapState} from 'vuex';
import calcularEdad from '../helpers/utilidades';
import { defineAsyncComponent } from "vue";
import {darFormatoRut, verificarRut,formatRut} from '../helpers/rut';

export default {
    components:{
        ModalCargando: defineAsyncComponent(()=> import(/* webpackChunkName:"ModalCargando"*/'../../shared/components/ModalCargando.vue')),
    },
    data(){
        return{
            adopta:{
                adoptaRut:'',
                adoptaRutSinPuntos:'',
                adoptaNombres:'',
                adoptaApellidos:'',
                adoptaDireccion:'',
                adoptaComuna:'',
                adoptaTelefono:'',
                adoptaEmail:'',
                idAnimal:null,
            },
            errorInputs:{},
            modal:false
        }
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
                }, 5000);
            });
        },
        adoptaAnimal(){
            this.adopta['adoptaDatosAnimal'] = this.adopcionId;
            this.$store.dispatch('huellas/adoptaAnimal',this.adopta);
        },
        checkForm(e){
            this.errorInputs['Rut']   = !this.adopta.adoptaRut ? '* El rut es obligatorio':'';
            this.errorInputs['Nombres']   = !this.adopta.adoptaNombres ? '* El nombre es obligatorio':'';
            this.errorInputs['Apellidos'] = !this.adopta.adoptaApellidos ? '* El apellido es obligatorio':'';
            this.errorInputs['Direccion'] = !this.adopta.adoptaDireccion ? '* La dirección es obligatorio':'';
            this.errorInputs['Comuna']    = !this.adopta.adoptaComuna ? '* La comuna es obligatorio':'';
            this.errorInputs['Telefono']  = !this.adopta.adoptaTelefono ? '* El teléfono es obligatorio':'';
            this.errorInputs['Email']     = !this.adopta.adoptaEmail ? '* El correo electrónico es obligatorio':'';

            if(this.errorInputs.Rut === '' && this.errorInputs.Nombres === '' && this.errorInputs.Apellidos === '' && this.errorInputs.Direccion === '' && this.errorInputs.Comuna === '' && this.errorInputs.Telefono === '' && this.errorInputs.Email === ''){
                this.mostrarModal();
                setTimeout(()=>{
                    this.adoptaAnimal();
                },3000);
            }
            e.preventDefault();  
        },
        scrollToTop() {
            window.scrollTo(0, 0); // Esto posicionará el scroll al inicio (arriba)
        },
     },
    computed:{
        getAnimalIdAdopcion(){
            this.$store.commit('huellas/getAnimalIdAdopcion',this.adopta.idAnimal);
        },
        ...mapState('huellas',['adopcionId','registroAdopcion']),
        datosAnimal(){
            const fec_nac = new Date(this.adopcionId.fec_nac);
            const hoy = new Date();
            return {"Edad": calcularEdad(fec_nac,hoy),
                    "Raza": this.adopcionId.raza,
                    "Color": this.adopcionId.color,
                    "Peso": this.adopcionId.peso,
                    "Sexo": this.adopcionId.sexo === 'M' ? 'Macho':'Hembra',
                    "Tamaño": this.adopcionId.tamano_animal,
                    "Esterilización": this.adopcionId.esterelizacion === 'S' ? 'Si':'No'
                    };
        },
    },
    watch:{
        'registroAdopcion':async function(){
            if(this.registroAdopcion !== null){
                await this.hideModal();
                if(this.registroAdopcion){
                    this.scrollToTop();
                    this.$router.push('/');
                }
                this.$store.commit('huellas/registroAdopcion',null);
            }    
        },
        'adopta.adoptaRut': function(){
            this.adopta.adoptaRut = darFormatoRut(this.adopta.adoptaRut);
            if(this.adopta.adoptaRut === ''){
                this.errorInputs.Rut = '* El rut es obligatorio';
            }
            else if(verificarRut(this.adopta.adoptaRut) === false){
                this.errorInputs.Rut = '* El rut es incorrecto';
            }
            else{
                this.errorInputs.Rut = '';
                this.adopta.adoptaRutSinPuntos = formatRut(this.adopta.adoptaRut, true)
            }
        },
        'adopta.adoptaNombres': function(){
            if(this.adopta.adoptaNombres){
                this.errorInputs.Nombres = '';
            }else{
                this.errorInputs.Nombres = '* El nombre es obligatorio';
            }
        },
        'adopta.adoptaApellidos': function(){
            if(this.adopta.adoptaApellidos){
                this.errorInputs.Apellidos = '';
            }else{
                this.errorInputs.Apellidos = '* El apellido es obligatorio';
            }
        },
        'adopta.adoptaDireccion': function(){
            if(this.adopta.adoptaDireccion){
                this.errorInputs.Direccion = '';
            }else{
                this.errorInputs.Direccion = '* La dirección es obligatorio';
            }
        },
        'adopta.adoptaComuna': function(){
            if(this.adopta.adoptaComuna){
                this.errorInputs.Comuna = '';
            }else{
                this.errorInputs.Comuna = '* La comuna es obligatorio';
            }
        },
        'adopta.adoptaTelefono': function(){
            if(this.adopta.adoptaTelefono){
                this.errorInputs.Telefono = '';
            }else{
                this.errorInputs.Telefono = '* El teléfono es obligatorio';
            }
        },
        'adopta.adoptaEmail': function(){
            if(this.adopta.adoptaEmail){
                this.errorInputs.Email = '';
            }else{
                this.errorInputs.Email = '* El correo electrónico es obligatorio';
            }
        }
    },

    created(){
        const {id} = this.$route.params;
        this.adopta.idAnimal = id;
    },
    mounted(){}
}
</script>
<style lang="">
    
</style>