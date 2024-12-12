<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SucursalesController;


Route::get('/', function () {
    return view('modulos.users.Ingresar');
});
Route::get('Inicio', function () {
    return view('modulos.Inicio');
});

//Route::get('Primer-Usuario', [UsuariosController::class, 'PrimerUsuario']);




Auth::routes();

Route::get('Sucursales', [SucursalesController::class, 'index'])->name('home');
Route::post('Sucursales', [SucursalesController::class, 'store'])->name('Sucursales.store');
Route::get('Editar-Sucursal/{id_sucursal}', [SucursalesController::class, 'edit']);
Route::put('Actualizar-Sucursal', [SucursalesController::class, 'update']);
Route::get('Cambiar-Estado-Sucursal/{estado}/{id_sucursal}', [SucursalesController::class, 'CambiarEstado']);

