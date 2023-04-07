<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pelicula;
use App\Models\serie;

class categoria extends Model
{
    use HasFactory;

    public function peliculas()
    {
        return $this->hasMany(pelicula::class, 'categoria_id', 'id');
    }

    public function series()
    {
        return $this->hasMany(serie::class);
    }
}
