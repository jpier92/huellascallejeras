<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Adopta;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animal';
    protected $primaryKey = 'id_animal';


    /**
     * Get the adopcion associated with the Animal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function adopcion()
    {
        return $this->hasOne(Adopta::class, 'id_animal', 'id_animal');
    }
}
