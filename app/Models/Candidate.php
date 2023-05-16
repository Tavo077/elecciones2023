<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'nombre',
        'nombre_partido',
        'logo',
        'foto_persona',
    ];

    use HasFactory;
}
