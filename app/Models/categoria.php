<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pelicula;

class categoria extends Model
{
    use HasFactory;

    //Con este metodo devolvemos todos las peliculas 
    public function peliculas()
    {
        //Esto metodo es el que nos hace la referencia de que una categoria puede tener muchos todos (1 --> muchos)
        return $this->hasMany(pelicula::class);
    }
}
