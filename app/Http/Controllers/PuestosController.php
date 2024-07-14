<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puesto;

class PuestosController extends Controller
{
    public function gestionPrincipal()
    {
        // Ejemplo de lógica para obtener los datos de los puestos
        $puestos = Puesto::all(); // Esto debe retornar una colección de modelos Puesto
        return view('gestionPrincipal', compact('puestos'));
    }
}
