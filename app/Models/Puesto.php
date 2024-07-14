<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    protected $table = 'Puestos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'ID_Puesto'; // Clave primaria

    // Si estás usando timestamps y las columnas se llaman 'created_at' y 'updated_at'
    public $timestamps = false;

    // Si tus columnas no siguen la convención de Laravel, deberías especificarlas así:
    protected $fillable = ['Ubicacion', 'Estado', 'Precio_Alquiler', 'Concesionario', 'Contacto', 'Productos', 'Fecha_Ingreso', 'Fecha_Salida'];
}
