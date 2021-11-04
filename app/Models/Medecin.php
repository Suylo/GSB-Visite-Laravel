<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medecin extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    use HasFactory;


    /**
     *
     * Un médecin a 0 ou plusieurs rapports
     *
     * @return HasMany
     */
    public function rapports(): HasMany
    {
        return $this->hasMany(Rapport::class, 'id_medecin');
    }
}

