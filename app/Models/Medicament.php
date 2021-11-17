<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    public function offrirs(): HasMany
    {
        return $this->hasMany(Offrir::class, 'id_medicament');
    }

    /**
     *
     * Un médicament appartient à une et une seule famille
     *
     * @return BelongsTo
     */
    public function famille(): BelongsTo
    {
        return $this->belongsTo(Famille::class, 'id_famille');
    }



}
