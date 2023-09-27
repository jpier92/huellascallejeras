<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\SendEmailHelpers;


class EnvioEmailController extends Controller
{
    protected $helperSendEmail;
    
    public function __construct(SendEmailHelpers $helperSendEmail)
    {
        $this->helperSendEmail = $helperSendEmail;
    }

    public function index(Request $request){

        $respuesta = array(
            'error'=>false,
            'mensaje' => 'El registro se ha guardado correctamente'
        );

        $request->validate([
            'tipoForm'      => ['required'],
            'notifNombre'   => ['required'],
            'notifTelefono' => ['required'],
            'notifEmail'    => ['required'],
            'notifAsunto'   => ['required'],
            'notifMensaje'  => ['required']
        ]);

        try {
            //code...
            $this->helperSendEmail->enviarEmailApoyo($request);
            return response()->json($respuesta);

        } catch (\Throwable $th) {
            $respuesta['error'] = true;
            $respuesta['mensaje'] = 'Ups! a ocurrido un error interno. '.$th->getMessage();
            return response()->json($respuesta);
        }

 }
}
