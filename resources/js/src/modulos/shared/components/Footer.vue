<template>
    <div style="background-color: #e7e7e7;">
        <div class="row">
            <div class="img-ante-footer">
                <p class="titulo-huellas" style="color: #ffff;">¡Con tu ayuda podemos!</p>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row py-2">
                <h5>Colaboradores</h5>
            </div>
            <div class="row">
                    <div class="col d-flex justify-content-center align-items-center ">
                        <div class="">
                            <img style="width: 75px;" src="/assets/huellas/img/veterinaria.png" alt="">
                        </div>
                        <dir class="">
                            <img style="width: 75px;" src="/assets/huellas/img/veterinaria.png" alt="">
                        </dir>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="redes-sociales mx-2 d-flex justify-content-center align-items-center"><i class="fab fa-instagram fa-lg" style="color: #eeeeec;"></i></div>
                            <div class="redes-sociales mx-2 d-flex justify-content-center align-items-center"><i class="fab fa-facebook fa-lg" style="color: #eeeeec;"></i></div>
                            <div class="redes-sociales mx-2 d-flex justify-content-center align-items-center"><i class="fab fa-youtube fa-lg" style="color: #eeeeec;"></i></div>
                            <div class="redes-sociales mx-2 d-flex justify-content-center align-items-center"><i class="fab fa-twitter fa-lg" style="color: #eeeeec;"></i></div>
                        </div>
                        <p class="texto text-center my-2"> Hecho con cariño por JP <i aria-hidden="true" class="fas fa-heart" style="color: red;"></i></p>
                    </div>
            </div>
        </div>    
    </div>
</template>
<script>
export default {
    
}
</script>
<style>
    .img-ante-footer{
        margin:0px;
        padding: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 194px;
        background: url('/assets/huellas/img/huella-dog.jpg') center;
        background-size: cover;
    }

    .redes-sociales{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #32abad;
    }
    .titulo-huellas{
        color: #464659;
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 60px;
    }

</style>