<?php

namespace App\Http\Controllers;

use App\Models\Adopciones;
use App\Models\Adopta;
use App\Models\Persona;
use Illuminate\Http\Request;

class AdoptaController extends Controller
{
    protected $modelPersona;
    protected $modelAdopciones;
    protected $modelAdopcion;

    public function __construct(Persona $persona, Adopciones $adopciones, Adopta $adopcion)
    {
        $this->modelPersona = $persona;
        $this->modelAdopciones = $adopciones;
        $this->modelAdopcion = $adopcion;
    }
    public function store(Request $request){
        $respuesta = array(
            'error'=>false,
            'mensaje' => 'El registro se ha guardado correctamente'
        );
        $request->validate([
            'adoptaRut' => ['required'],
            'adoptaNombres' => ['required'],
            'adoptaApellidos' => ['required'],
            'adoptaDireccion' => ['required'],
            'adoptaComuna' => ['required'],
            'adoptaTelefono' => ['required'],
            'adoptaEmail' => ['required'],
            'adoptaIdAnimal' => ['required']
        ]);
        try {
            $this->modelPersonad->insertPersona($request);
            $this->modelAdopciones->adoptaAnimal($request);
            $this->modelAdopcion->deshabilitarAnimal($request->adoptaIdAnimal);
            
            return response()->json($respuesta);
        } catch (\Throwable $th) {
            $respuesta['error'] = true;
            $respuesta['mensaje'] = 'Ups! a ocurrido un error interno. '.$th->getMessage();
            return response()->json($respuesta);
        }
    
        



    }
}
