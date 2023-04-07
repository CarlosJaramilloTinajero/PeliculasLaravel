<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // sintaxis del nombre de la funcion (muteator)
    // setNombreDelAtributoAttribute
    public function setPasswordAttribute($value)
    {
        // Esta linea de codigo incripta el atributo password de esta clase que se va a agregar con la creacion del usuario
        $this->attributes['password'] = bcrypt($value);
        // $this->attributes['password'] = encrypt($value);
    }

    public function movies()
    {
        return $this->hasMany(lista::class, 'idUser', 'id');
    }
}
