<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_partido',
    ];

    /* Relación polimorfica */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
