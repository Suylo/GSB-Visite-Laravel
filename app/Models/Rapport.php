<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Rapport extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        "id",
        "date",
        "motif",
        "bilan",
        "id_visiteur",
        "id_medecin"
    ];

    /**
     *
     * Un Rapport possède plusieurs offrir
     *
     * @return HasMany
     */
    public function offrirs()
    {
        return $this->hasMany(Offrir::class, 'id_rapport');
    }

    /**
     *
     * Un Rapport appartient à 1 Medecin
     *
     * @return BelongsTo
     */
    public function medecin()
    {
        return $this->belongsTo(Medecin::class, 'id_medecin');
    }

    /**
     *
     * Un Rapport appartient à 1 seul Visiteur
     *
     * @return BelongsTo
     */
    public function visiteur()
    {
        return $this->belongsTo(Visiteur::class, 'id_visiteur');
    }
}
