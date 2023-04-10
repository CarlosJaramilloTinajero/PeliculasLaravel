<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(categoria::class, 'categoria_id', 'id');
    }

    public function lists()
    {
        return $this->hasMany(lista::class, 'idPelicula', 'id');
    }
}
