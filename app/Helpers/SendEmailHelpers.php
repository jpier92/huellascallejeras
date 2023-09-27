<?php

namespace App\Helpers;

use App\Jobs\SendEmailJob;
use App\Jobs\SendEmailJobAgrupacion;
use App\Jobs\SendEmailJobApoyo;

class SendEmailHelpers{


public function enviarComprobanteUsuario($request){
    $details = array(
        'adoptaEmail' => $request->adoptaEmail,
        'adoptaNombres' => $request->adoptaNombres,
        'adoptaNombreAnimal' => $request->adoptaDatosAnimal['nombre'],
        'adoptaImagen' => $request->adoptaDatosAnimal['url_imagen']
    );
  
    dispatch(new SendEmailJob($details));
}

public function enviarComprobanteAgrupacion($request){
    $details = array(
        'adoptaEmail' => $request->adoptaEmail,
        'adoptaNombres' => $request->adoptaNombres,
        'adoptaApellidos' => $request->adoptaApellidos,
        'adoptaDireccion' => $request->adoptaDireccion,
        'adoptaComuna' => $request->adoptaComuna,
        'adoptaTelefono' => $request->adoptaTelefono,
        'adoptaNombreAnimal' => $request->adoptaDatosAnimal['nombre'],
        'adoptaImagen' => $request->adoptaDatosAnimal['url_imagen'],
    );
    dispatch(new SendEmailJobAgrupacion($details));
}

public function enviarEmailApoyo($request){
    $details = array(
          'apoyoForm'     => $request->tipoForm,
          'apoyoNombre'   => $request->notifNombre,
          'apoyoTelefono' => $request->notifTelefono,
          'apoyoEmail'    => $request->notifEmail,
          'apoyoAsunto'   => $request->notifAsunto,
          'apoyoMensaje'  => $request->notifMensaje,
    );
  
    dispatch(new SendEmailJobApoyo($details));
}

}
