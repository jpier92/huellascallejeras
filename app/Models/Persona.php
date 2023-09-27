<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';

    public function insertPersona($request){

        $verificarPersona = DB::table('persona')
                            ->where('rut',$request->adoptaRutSinPuntos)
                            ->first();
        if(!$verificarPersona){
            DB::table('persona')->insert([
                'rut' => $request->adoptaRutSinPuntos,
                'nombre' => $request->adoptaNombres,
                'apellidos' => $request->adoptaApellidos,
                'direccion' => $request->adoptaDireccion,
                'comuna' => $request->adoptaComuna,
                'telefono' => $request->adoptaTelefono,
                'email' => $request->adoptaEmail
            ]);
        }

        
    }
}
