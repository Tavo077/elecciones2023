<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'party_id'
    ];

    /* Relación polimorfica */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}
