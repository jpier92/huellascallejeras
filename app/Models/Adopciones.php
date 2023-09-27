<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Adopciones extends Model
{
    use HasFactory;
    protected $table = 'adopciones';

    public function adoptaAnimal($request){
        $verificarPersona = DB::table('persona')
                            ->where('rut',$request->adoptaRutSinPuntos)
                            ->select('id_persona')
                            ->first();

        if($verificarPersona){
            // $persona = $verificarPersona->pluck('id_persona');
            DB::table('adopciones')->insert([
                'id_persona'=> $verificarPersona->id_persona,
                'id_animal'=> $request->adoptaDatosAnimal['id_animal'],
                'fecha_adopcion'=> date('Y-m-d'),
            ]);
        }
    }
}
