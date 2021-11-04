<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medicament extends Model
{
    protected $table = 'medicaments';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    use HasFactory;

    /**
     *
     * Un médicament a plusieurs offrir
     *
     * @return HasMany
     */
    public function offrirs()
    {
        return $this->hasMany(Offrir::class);
    }

}
