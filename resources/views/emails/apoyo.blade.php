
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apoyo</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>

<div class="container">
    <h3><strong>Buenas noticias!!</strong></h3>
    <p>Tenemos un nuevo. {{$apoyoForm === 'Hogar' ? $apoyoForm.' Temporal' : $apoyoForm}}</p>
    <div class="mt-2">
        <h4>Los datos de la persona:</h4>
        <ul>
            <li><span style="font-weight: bold;">Nombre</span>  : {{$apoyoNombre}}</li>
            <li><span style="font-weight: bold;">Telefono</span>: {{$apoyoTelefono}}</li>
            <li><span style="font-weight: bold;">Email</span>   : {{$apoyoEmail}}</li>
            <li><span style="font-weight: bold;">Asunto</span>  : {{$apoyoAsunto}}</li>
            <li><span style="font-weight: bold;">Mensaje</span> : {{$apoyoMensaje}}</li>
        </ul>
    </div>
</div>
@vite('resources/js/app.js')
</body>
</html>