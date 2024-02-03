<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Worker extends Model
{
    use AuthorizesRequests;
    use ValidatesRequests;
    // use HasApiTokens;
    use HasFactory;
    // use HasProfilePhoto;
    // use Notifiable;
    // use TwoFactorAuthenticatable;
    // protected $fillable = ['name',];

    protected $table = 'worker'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Nombre de la columna de clave primaria
    protected $string = 'name';
    public $timestamps = false; // Indica si el modelo debe tener timestamps
}
