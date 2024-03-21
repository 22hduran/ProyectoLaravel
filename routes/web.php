<?php

use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EquipoController::class, 'mostrarEquipos'])->middleware(['auth', 'verified'])->name('equipos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::get('/equipos', [EquipoController::class, 'mostrarEquipos'])->middleware(['auth', 'verified'])->name('equipos');
Route::get('/clasificacion', [ClasificacionController::class, 'mostrarClasificacion'])->middleware(['auth', 'verified'])->name('clasificacion');

Route::resource('/dashboard/equipos', EquipoController::class)->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/comenzar-jornada', [JornadaController::class, 'comenzarJornada'])->name('comenzar-jornada');

Route::get('/mostrar-partidos-jornada', [JornadaController::class, 'mostrarPartidosJornada'])->name('mostrarPartidosJornada');

Route::post('/jugar-partidos', [JornadaController::class, 'jugarPartidos'])->name('jugar_partidos');



Route::resource('/dashboard/jugadores', JugadorController::class);

require __DIR__.'/auth.php';
