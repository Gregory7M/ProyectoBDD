<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioSesionController extends Controller
{
    public function inicioSesion()
    {
        return view('inicioSesion');
    }
}
