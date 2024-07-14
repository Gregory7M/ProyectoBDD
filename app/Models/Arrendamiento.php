<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrendamiento extends Model
{
    use HasFactory;
    protected $table = 'arrendamientos';
    protected $primaryKey = 'ID_Arrendamiento';

    protected $fillable = [
        'ID_Puesto',
        'ID_Comerciante',
        'Fecha_Inicio',
        'Fecha_Fin',
        'Monto',
    ];
}
