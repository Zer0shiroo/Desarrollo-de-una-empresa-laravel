<?php
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('oficinas.index'); 
});

Route::resource('oficinas', OficinaController::class);
Route::resource('oficinas.empleados', EmpleadoController::class)->shallow(); 
Route::get('oficinas/{oficina}/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('oficinas.empleados.edit');
Route::put('oficinas/{oficina}/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('oficinas.empleados.update');
