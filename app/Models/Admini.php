<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admini extends Model
{
    use HasFactory;

    protected $table = 'adminis'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'ID_Admin'; // Clave primaria

    // Si estás usando timestamps y las columnas se llaman 'created_at' y 'updated_at'
    public $timestamps = false;

    // Si tus columnas no siguen la convención de Laravel, deberías especificarlas así:
    // Especifica los campos que se pueden llenar mediante asignación masiva
    protected $fillable = ['nombre', 'apellido', 'correo', 'contraseña'];
}
