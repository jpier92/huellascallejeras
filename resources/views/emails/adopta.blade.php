<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopcion</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
<h3>Hola {{$nombreAdopta}}</h3>
<div class="container">
    <div class="row border rounded">
        <div class="col d-flex justify-content-end py-3">
            <img class="rounded" src="{{$message->embed(public_path().$urlImagen)}}" style="width: 400px;" alt="">
        </div>
        <div class="col d-flex justify-content-start align-items-center">
            <div>   
                <p class="fs-5 text">Adoptaste a {{$nombreAnimal}}!! Estamos muy felices que hayas tomado esta decision!!</p>
                <p class="fs-5 text">Pronto de contactaremos para afinar los ultimos detalles!!</p>
            </div>
        </div>
    </div>
    <div class="mt-4 d-flex justify-content-center">
        <img src="{{$message->embed(public_path().'/assets/huellas/img/huellasCallejeras.jpg')}}" style="width: 200px; border-radius: 50%" alt="">
    </div>
</div>

@vite('resources/js/app.js')
</body>
</html>