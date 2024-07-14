<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PuestosController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\TransaccionesController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\inicioSesionController;
use App\Http\Controllers\PrincipalController;


// Ruta principal
Route::get('/', [HomeController::class,'index']);

//Pantalla de inicio de sesion
Route::get('/inicioSesion', [inicioSesionController::class, 'inicioSesion']);

//Pantalla principal de la administracion
Route::get('/principal', [PrincipalController::class, 'principalAdministracion']);

// Rutas para la gestión principal
Route::get('/gestion-principal', [PuestosController::class, 'gestionPrincipal']);

// Rutas para inventario
Route::get('/inventario-principal', [InventarioController::class, 'inventarioPrincipal']);

// Rutas para transacciones
Route::get('/transacciones-principal', [TransaccionesController::class, 'transaccionesPrincipal']);

// Rutas para mantenimiento
Route::get('/mantenimiento-principal', [MantenimientoController::class, 'mantenimientoPrincipal']);