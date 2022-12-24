<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peliculaController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\controladorDelSitio;
use App\Http\Controllers\listaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegiterController;
use App\Http\Controllers\serires;
use App\Http\Controllers\temporadasController;
use App\Http\Controllers\userController;

Route::patch('/Temporada/update/{serie}/{temporada}', [temporadasController::class, 'update'])->name('updateTemporada');

Route::get('/Temporada/show/{serie}/{temporada}', [temporadasController::class, 'show'])->name('showTemporada');

Route::delete('/Temporada/destroy/{temporada}', [temporadasController::class, 'destroy'])->name('eliminarTemporada');

Route::post('/Temporada/store/{serie}', [temporadasController::class, 'store'])->name('storeTemporada');

Route::get('/Temporada/create/{serie}', [temporadasController::class, 'agregarTemporada'])->name('agregarTemporada');

Route::get('/Temporadas/{serie}', [temporadasController::class, 'index'])->name('temporadasAgregadas');

Route::delete('Lista/{lista}', [listaController::class, 'destroy'])->name('eliminarLista');

Route::post('/Lista/{pelicula}', [listaController::class, 'store'])->name('agregarLista');

Route::get('/Lista', [listaController::class, 'index'])->name('Lista');

Route::get('/Series', [serires::class, 'mostrarSeries'])->name('Series');

Route::get('/modificarSerie/{serie}', [serires::class, 'show'])->name('modificarSerie');

Route::patch('/Serie/{serie}', [serires::class, 'update'])->name('update.serie');

Route::delete('/Serie/{serie}', [serires::class, 'destroy'])->name('EliminarSerie');

Route::get('/Series/create', [serires::class, 'create'])->name('create.series');

Route::get('/SeriesIndex', [serires::class, 'index'])->name('seriesAgregadas');

Route::post('/Serie', [serires::class, 'store'])->name('agregarSerie');

Route::get('/Series/{categoria}', [serires::class, 'mostrar_series_por_categoria'])->name('seriesPorCategoria');

Route::get('/Serie/{serie}', [serires::class, 'mostrarSerie'])->name('mostrarSerie');

Route::patch('/User/{user}', [userController::class, 'update'])->name('modificarUser');

Route::get('/VerTrailer/{pelicula}', [controladorDelSitio::class, 'verTrailer'])->name('verTailer');

Route::get('/VerPelicula/{pelicula}', [controladorDelSitio::class, 'verPelicula'])->name('verPelicula');

Route::get('/Pelicula/{pelicula}', [controladorDelSitio::class, 'showPelicula'])->name('mostrarPelicula');

Route::get('/Peliculas/{categoria}', [controladorDelSitio::class, 'index_Peliculas_por_categoria'])->name('extrasPeliculas_porCategoria');


Route::get('/Peliculas', [controladorDelSitio::class, 'index_Peliculas'])->name('extrasPeliculas');

Route::get('/', [controladorDelSitio::class, 'index'])->name('extras');

Route::get('/Inicio', [controladorDelSitio::class, 'index'])->name('extras');

Route::resource('pelicula', peliculaController::class);

Route::resource('categoria', categoriaController::class);

Route::get('/Registro', [RegiterController::class, 'show'])->name('registro');

Route::post('/Registro', [RegiterController::class, 'Register'])->name('registro');

Route::get('/Login', [loginController::class, 'show'])->name('login');

Route::post('/Login', [loginController::class, 'login'])->name('login');

Route::get('/Logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/Cuenta', [controladorDelSitio::class, 'Cuenta'])->name('cuenta');
