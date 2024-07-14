<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    protected $table = 'puestos';
    protected $primaryKey = 'ID_Puesto';

    protected $fillable = [
        'Ubicacion',
        'Estado',
        'Precio_Alquiler',
        'Concesionario',
        'Contacto',
        'Productos',
        'Fecha_Ingreso',
        'Fecha_Salida',
    ];

    // Si estás usando timestamps y las columnas se llaman 'created_at' y 'updated_at'
    public $timestamps = false;    
}
