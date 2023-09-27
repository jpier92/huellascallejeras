<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopción</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>

<div class="container">
    <h3><strong>Buenas noticias!!</strong></h3>
    <p>Han adoptado a {{$nombreAnimal}}</p>
    <div>
        <img src="{{$message->embed(public_path().$urlImagen)}}" alt="">
    </div>
    <div class="mt-2">
        <h4>Los datos de la persona:</h4>
        <ul>
            <li><span style="font-weight: bold;">Nombre</span>:  {{$nombreAdopta}} {{$apellidosAdopta}}</li>
            <li><span style="font-weight: bold;">Direccion</span>: {{$direccionAdopta}}</li>
            <li><span style="font-weight: bold;">Comuna</span>: {{$comunaAdopta}}</li>
            <li><span style="font-weight: bold;">Telefono</span>: {{$telefonoAdopta}}</li>
        </ul>
    </div>
</div>
@vite('resources/js/app.js')
</body>
</html>