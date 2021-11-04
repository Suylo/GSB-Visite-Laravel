<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class Offrir extends Model
{
    use HasFactory;

    protected $primaryKey = ["id_rapport", "id_medicament"];
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        "id_rapport",
        "id_medicament",
        "quantite"
    ];

    /**
     *
     * Offrir appartient à Rapport
     *
     * @return BelongsTo
     */
    public function rapport(): BelongsTo{
        return $this->belongsTo(Rapport::class, 'id_rapport');
    }

    /**
     *
     * Offrir appartient à Medicament
     *
     * @return BelongsTo
     */
    public function medicament(): BelongsTo
    {
        return $this->belongsTo(Medicament::class, 'id_medicament');
    }

}
