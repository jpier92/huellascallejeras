<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AdopcionResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($animal) {
                return [
                    'id_animal' => $animal->id_animal,
                    'nombre' => $animal->nombre,
                    'edad' => $animal->edad,
                    'sexo' => $animal->sexo,
                    'color' => $animal->color,
                    'peso' => $animal->peso,
                    'altura' => $animal->altura,
                    'personalidad' => $animal->personalidad,
                    'url_imagen' => $animal->url_imagen,
                    'raza' => $animal->raza,
                    'tipo_animal' => $animal->tipo_animal,
                    'tamano_animal' => $animal->tamano_animal,
                    'fec_nac' => $animal->fec_nac,
                    'esterelizacion' => $animal->esterelizacion,
                    'id_animal' => $animal->id_animal
                    // Agrega más campos según sea necesario
                ];
            }),
        ];
    }
}
