<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'visiteurs';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'prenom',
        'login',
        'password',
        'adresse',
        'cp',
        'ville',
        'date_embauche'
    ];

    protected $hidden = [
        'password',
        'ticket',
    ];

    /**
     *
     * Un Visiteur a plusieurs Rapport
     *
     * @return HasMany
     */
    public function rapports(): HasMany{
        return $this->hasMany(Rapport::class, 'id');
    }

}

