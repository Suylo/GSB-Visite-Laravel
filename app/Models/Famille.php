<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Famille extends Model
{

    protected $table = 'familles';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    use HasFactory;

    /**
     *
     * Une famille possède plusieurs médicaments
     *
     * @return HasMany
     */
    public function medicaments(): HasMany{
        return $this->hasMany(Medicament::class);
    }

}
