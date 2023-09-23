<template lang="">
    <div class="row mx-2 my-2">
        <img src="/assets/huellas/img/perro-feliz.jpg" class="img-adopta" alt="Logo huellas callejeras lumaco">
        <div class="d-flex justify-content-center">
            <div class="btn-adopta" style="position: relative; top:-65px;">
                <router-link class="nav-link" :to="{name:'adopta'}" ><i aria-hidden="true" class="fas fa-heart"><div></div></i><span>Adopta un amigo</span></router-link>
            </div>
        </div>
    </div>
    <section name="informacion">
        <div class="container">
            <h3 class="text-center mb-4">Huellas Callejeras Lumaco <i class="fas fa-duotone fa-paw fa-beat fa-xl"></i></h3>
            <div class="row">
                <div class="col sm-1 md-3">
                    <div class="mx-2 text-center">
                        <img class="my-2" src="/assets/huellas/img/jornada-adopcion.png" alt="">
                        <h5>Jornadas de adopción</h5>
                        <p class="texto">Nuestras jornadas de adopción son instancias donde se invita a adoptar de forma responsable a caninos y felinos que han sido víctimas de abandono y muchas veces maltrato. Buscamos hogares donde les den la mejor calidad de vida posible.</p>
                    </div>
                </div>
                <div class="col sm-1 md-3">
                    <div class="mx-2 text-center">
                        <img class="my-2" src="/assets/huellas/img/esterilizacion.png" alt="">
                        <h5>Jornadas veterinarias</h5>
                        <p class="texto">Nuestras jornadas de adopción son instancias donde se invita a adoptar de forma responsable a caninos y felinos que han sido víctimas de abandono y muchas veces maltrato. Buscamos hogares donde les den la mejor calidad de vida posible.</p>
                    </div>
                </div>
                <div class="col sm-1 md-3">
                    <div class="mx-2 text-center">
                        <img class="my-2" src="/assets/huellas/img/educacion.png" alt="">
                        <h5>Educación</h5>
                        <p class="texto">La educación es el pilar fundamental en el cumplimiento de la tenencia responsable de mascotas, por lo que, realizamos y participamos en charlas y talleres de todo tipo, con el fin de integrar a la comunidad en la temática.</p>
                    </div>
                </div>
                <div class="col sm-1 md-3">
                    <div class="mx-2 text-center">
                        <img class="my-2" src="/assets/huellas/img/gestion.png" alt="">
                        <h5>Gestión comunitaria</h5>
                        <p class="texto">Es importante que la comunidad se involucre y participe en el tema, de manera que colaboramos otorgándoles las herramientas, orientando y fortaleciendo planes de acción que quieran ejercer para contribuir al control poblacional.</p>
                    </div>
                </div>
        </div>
    </div>
    </section>
    <section name="adopciones">
        <div class="container mt-4">
            <h3 class="text-center my-3">Adopciones</h3>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/huellas/img/adopcion-perro.jpg" class="d-block w-100" style="height: 400px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/huellas/img/adopcion-gato.jpg" class="d-block w-100" style="height: 400px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>
    <section name="quieres-ser-parte">
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <img src="/assets/huellas/img/huellasCallejeras.jpg" class="d-block w-100" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="">
                        <h3 class="text-center mb-3">¿Quieres ser parte?</h3>
                        <p class="text-center">Ser voluntario es participar activamente en las actividades de la ONG, contribuyendo de manera directa en la rehabilitación, recuperación y reubicación de perros y gatos abandonados.
                            Sólo pedimos que el voluntario, asuma con responsabilidad y compromiso. ¡Completa el formulario y te contactamos!</p>
                            <FormContacto />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import { defineAsyncComponent } from 'vue';

export default {
    components:{
        FormContacto: defineAsyncComponent(()=> import(/* webpackChunkName:"Navbar"*/'./../../shared/components/FormContacto.vue')),

    }
}
</script>
<style scoped>
    .img-adopta{
        height: 400px;
        width: 100%;
        filter: brightness(60%);
    }
    .btn-adopta{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        width: 165px;
        background-color: #fdfdfd;
        border-radius: 22px;
    }

    .btn-adopta a{
        font-weight: bold;
        text-decoration: none;
        color: #32abad;
    }
</style>