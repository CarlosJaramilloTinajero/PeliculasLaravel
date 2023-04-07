<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lista extends Model
{
    use HasFactory;

    protected $fillable = ['idUser', 'idPelicula'];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }

    public function movie()
    {
        return $this->belongsTo(pelicula::class, 'idPelicula', 'id');
    }
}
