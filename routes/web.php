<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ListController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\LogoutController;
use App\Http\Controllers\Frontend\MovieController;
use App\Http\Controllers\Frontend\RegiterController;
use App\Http\Controllers\SeriresController;
use App\Http\Controllers\TemporadasController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\SeriresController as FrontenSeriresController;
use App\Models\categoria;

//********************************  Website  *************************************

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/series', [FrontenSeriresController::class, 'mostrarSeries'])->name('Series');

Route::get('/serie/{serie}', [FrontenSeriresController::class, 'mostrarSerie'])->name('mostrarSerie');

Route::get('/series/show/{categoria}', [FrontenSeriresController::class, 'mostrar_series_por_categoria'])->name('seriesPorCategoria');

Route::get('/pelicula/show/{pelicula}', [MovieController::class, 'showMovieView'])->name('show.movie');

Route::get('/peliculas/{categoria}', [MovieController::class, 'showMoviesByCategory'])->name('extrasPeliculas_porCategoria');

Route::get('/peliculas', [MovieController::class, 'showMovies'])->name('extrasPeliculas');

Route::get('/add-movie-by-api', function () {
    $categorias = categoria::all();
    return view('api-omba.add', ['categorias' => $categorias]);
})->name('add.omba');

// *********************   guest   ***************************
Route::middleware('guest')->group(function () {
    Route::get('/registro', [RegiterController::class, 'show'])->name('registro.show');

    Route::post('/registro', [RegiterController::class, 'Register'])->name('registro');

    Route::get('/login', [LoginController::class, 'show'])->name('login');

    Route::post('/login', [LoginController::class, 'login'])->name('login.user');
});

// *********************   auth   ***************************
Route::middleware('auth')->group(function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/cuenta', [UserController::class, 'cuenta'])->name('cuenta');

    Route::delete('lista/{lista}', [ListController::class, 'destroy'])->name('eliminarLista');

    Route::post('/lista/{pelicula}', [ListController::class, 'store'])->name('agregarLista');

    Route::get('/lista', [ListController::class, 'index'])->name('Lista');

    Route::patch('/user/{user}', [UserController::class, 'update'])->name('modificarUser');
});

Route::get('/ver-trailer/{pelicula}', [MovieController::class, 'showTrailer'])->name('verTailer');

Route::get('/ver-pelicula/{pelicula}', [MovieController::class, 'showMovie'])->name('verPelicula');

// *************************************  admin  *****************************************
Route::middleware('admin')->group(function () {
    Route::patch('/temporada/update/{serie}/{temporada}', [TemporadasController::class, 'update'])->name('updateTemporada');

    Route::get('/temporada/show/{serie}/{temporada}', [TemporadasController::class, 'show'])->name('showTemporada');

    Route::delete('/temporada/destroy/{temporada}', [TemporadasController::class, 'destroy'])->name('eliminarTemporada');

    Route::post('/temporada/store/{serie}', [TemporadasController::class, 'store'])->name('storeTemporada');

    Route::get('/temporada/create/{serie}', [TemporadasController::class, 'agregarTemporada'])->name('agregarTemporada');

    Route::get('/temporadas/{serie}', [TemporadasController::class, 'index'])->name('temporadasAgregadas');

    Route::get('/modificar-serie/{serie}', [SeriresController::class, 'show'])->name('modificarSerie');

    Route::patch('/serie/{serie}', [SeriresController::class, 'update'])->name('update.serie');

    Route::delete('/serie/{serie}', [SeriresController::class, 'destroy'])->name('EliminarSerie');

    Route::get('/series/create', [SeriresController::class, 'create'])->name('create.series');

    Route::get('/series-index', [SeriresController::class, 'index'])->name('seriesAgregadas');

    Route::post('/serie', [SeriresController::class, 'store'])->name('agregarSerie');

    Route::resource('pelicula', PeliculaController::class);

    Route::resource('categoria', CategoriaController::class);
});
