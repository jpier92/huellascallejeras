<template >
    <div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Dejanos tus datos!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form class="needs-validation" action="" @submit="checkForm" >
      <div class="modal-body">
            <div class="container-fluid">
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
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info"><span class="text-light">Adoptar y enviar</span></button>
        </div>
    </form>
    </div>
  </div>
</div>
    </div>
</template>
<script>
import {mapState} from 'vuex';
export default {
    data(){
        return{
            adopta:{
                adoptaRut:'',
                adoptaNombres:'',
                adoptaApellidos:'',
                adoptaDireccion:'',
                adoptaComuna:'',
                adoptaTelefono:'',
                adoptaEmail:'',
            },
            errorInputs:{}
        }
    },
    computed:{
        ...mapState('huellas',['adopcionId'])
    },
    methods:{
        adoptaAnimal(){
            this.adopta['adoptaIdAnimal'] = this.adopcionId.id_animal;
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
                this.adoptaAnimal();
            }
            e.preventDefault();
            
        }
    },
    watch:{
        'adopta.adoptaRut': function(){
            if(this.adopta.adoptaRut){
                this.errorInputs.Rut = '';
            }else{
                this.errorInputs.Rut = '* El rut es obligatorio';
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
    }
}
</script>
<style lang="">
    
</style>