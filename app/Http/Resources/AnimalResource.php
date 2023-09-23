<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AnimalResource extends ResourceCollection
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
                    'id' => $animal->id_animal,
                    'nombre' => $animal->nombre,
                    'edad' => $animal->edad,
                    // Agrega más campos según sea necesario
                ];
            }),
        ];
    }
}
