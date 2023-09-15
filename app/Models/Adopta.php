<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Adopta extends Model
{
    use HasFactory;
    protected $table = 'adopcion';
    protected $primaryKey = 'id_adopcion';


    public function animalesAdopcion(){
        $animalesEnAdopcion = DB::table('animal')
                            ->join('adopcion','animal.id_animal','=','adopcion.id_animal')
                            ->join('raza','animal.id_raza','=','raza.id_raza')
                            ->join('tipo_animal','animal.tipo_id','=','tipo_animal.id_tipo_animal')
                            ->join('tamanos','animal.id_tamano','=','tamanos.id_tamano')
                            ->where('adopcion.estado','true')
                            ->select(
                                'animal.id_animal',
                                'animal.nombre',
                                'animal.edad',
                                'animal.sexo',
                                'animal.color',
                                'animal.peso',
                                'animal.altura',
                                'animal.personalidad',
                                'animal.url_imagen',
                                'raza.nombre as raza',
                                'tipo_animal.tipo_animal',
                                'tamanos.tamano_animal',
                                'animal.fec_nac',
                                'animal.esterelizacion',
                                'animal.id_animal')
                            ->get();

        return $animalesEnAdopcion;
    }

    public function deshabilitarAnimal($idAnimal){

        DB::table('adopcion')->where('id_animal', $idAnimal)->update(['estado' => 'false']);
    }


    public function habilitarAnimal($idAnimal){

        DB::table('adopcion')->where('id_animal', $idAnimal)->update(['estado' => 'true']);
    }
    
}
