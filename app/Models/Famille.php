<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{

    protected $primaryKey = 'id';
    public $timestamps = false;

    use HasFactory;
}
