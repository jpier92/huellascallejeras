<template>
    <div class="container my-5">
        <section name="somos">
            <div class="row">
                <div class="col">
                    <h3>Nosotros</h3>
                    <hr>
                    <div name="texto-nosotros">
                        <p>
                            Somos una Organización No Gubernamental sin fines de lucro, que tiene por misión contribuir al control ético de la población canina y felina, a través de la promoción de la tenencia responsable de animales de compañía en Temuco y alrededores.
                        </p>
                        <p>
                            Actualmente, trabajamos en la articulación entre instituciones públicas, privadas y la comunidad, para poder contribuir de forma transversal en la problemática, beneficiando a caninos y felinos abandonados, otorgándoles una segunda oportunidad en familias que los quieran adoptar.
                        </p>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div>
                        <img style="height: 400px; width: 400px; border-radius: 5%;" src="/assets/huellas/img/perrita-negra.jpeg" alt="">
                    </div>
                </div>

            </div>
        </section>

        <section name="historia ">
            <div class="row mt-4">
                <div class="col">
                        <div class="fondo-transparente">
                            <div class="background-img">
                                <h3 class="py-3 text-center text-light">Nuestra Historia</h3>
                                <div class="px-3 py-3 text-light">
                                <p>
                                    Todo comenzó en el año 2007,  cuando jóvenes voluntarios que participaban en el Canil Municipal de Temuco para mejorar las adopciones y condiciones de los caninos en el lugar, decidieron unirse para desarrollar los rescates de forma independiente, y a la vez realizar diferentes actividades de tenencia responsable, que dieron lugar a la formación de la Agrupación Protectora Canes y Felinos Temuco.
                                </p>
                                <p>
                                    Con el fin de formalizar la organización, se gestionó a través del Ministerio de Justicia la obtención de la personalidad jurídica de corporación, siendo promulgada el año 2013 bajo el nombre de ONG Canes y Felinos Temuco. Esto trajo consigo muchos beneficios para postular a proyectos, creación de convenios y participación en la gestión pública, y a la vez, muchas responsabilidades que debimos asumir para asegurar la continuidad de nuestra organización.
                                </p>
                                <p>
                                    Actualmente, trabajamos en conjunto con la Municipalidad de Temuco, el Centro de Mantención Temporal y la comunidad, en un trabajo coordinado con otras organizaciones gubernamentales como SUBDERE y la Gobernación de la Araucanía, para resguardar la salud pública, el bienestar animal y al medio ambiente, como base de una ciudad más segura y preocupada por sus mascotas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section name="que-hacemos">
            <div class="row my-5">
                <h3 class="text-start my-4">¿Que hacemos?</h3>
                    <div class="col text-center">
                        <img  src="/assets/huellas/img/jornada-adopcion.png" alt="">
                        <h5>Jornadas de adopción</h5>
                        <p class="texto">Nuestras jorna das de adopción son instancias donde se invita a adoptar de forma responsable a caninos y felinos que han sido víctimas de abandono y muchas veces maltrato. Buscamos hogares donde les den la mejor calidad de vida posible.</p>      
                    </div>
                    <div class="col text-center">
                        <img src="/assets/huellas/img/esterilizacion.png" alt="">
                        <h5>Jornadas veterinarias</h5>
                        <p class="texto">Nuestras jornadas de adopción son instancias donde se invita a adoptar de forma responsable a caninos y felinos que han sido víctimas de abandono y muchas veces maltrato. Buscamos hogares donde les den la mejor calidad de vida posible.</p> 
                    </div>
                    <div class="col text-center">
                        <img src="/assets/huellas/img/educacion.png" alt="">
                        <h5>Educación</h5>
                        <p class="texto">La educación es el pilar fundamental en el cumplimiento de la tenencia responsable de mascotas, por lo que, realizamos y participamos en charlas y talleres de todo tipo, con el fin de integrar a la comunidad en la temática.</p>
                    </div>
                    <div class="col text-center">
                        <div class="content-tarjetas">
                        <img src="/assets/huellas/img/educacion.png" alt="">
                        <h5>Gestión comunitaria</h5>
                        <p class="texto">Es importante que la comunidad se involucre y participe en el tema, de manera que colaboramos otorgándoles las herramientas, orientando y fortaleciendo planes de acción que quieran ejercer para contribuir al control poblacional.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    
}
</script>
<style>

.fondo-transparente{
    /* position: relative; */
    width: 100%;
    height: auto;
    background-image: url('/assets/huellas/img/huellas.jpeg'); /* Ruta de la imagen */
    background-size: cover;
    background-attachment: fixed;
}
.background-img{
    /* position: absolute; */
    background-color: #336633;
    opacity: 0.9;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    height: auto;
}
    
</style>