<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('home');
    return redirect()->route ('inicio', ['numero' => 9, 'name' => 'Otro nombre']);
});
/*
Route::get('/estoesuncambiodeultimahora', function () {
    return view ('prueba');
})->name('paginadepruebas');

Route::get('/fadfadfasdfasfdsad/{numero}/{name}', function ($name = 'David', $numero = 2023) {

    return view ('home', ["nombre" => $name, "numero" => $numero]);
})->name('inicio');
*/

Route::get ('/bar/listado', [ BarController::class, 'index' ])->name('bars.index');

Route::get ('/bar/{id}', [BarController::class, 'show'])->name('bars.show');



