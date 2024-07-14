<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function mantenimientoPrincipal()
    {
        return view('mantenimientoPrincipal');
    }
}
