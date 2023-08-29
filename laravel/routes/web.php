<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WineController;
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

})->name('index');

// la ruta Home la crea Fortify y aplica el middleware de Auth
Route::get('/home', function () {
    return redirect()->route('index');
}
)->name('home');
/*
Route::get('/estoesuncambiodeultimahora', function () {
    return view ('prueba');
})->name('paginadepruebas');

Route::get('/fadfadfasdfasfdsad/{numero}/{name}', function ($name = 'David', $numero = 2023) {

    return view ('home', ["nombre" => $name, "numero" => $numero]);
})->name('inicio');
*/

Route::get ('/bar/listado', [ BarController::class, 'index' ])->name('bars.index');

Route::group(['middleware' => 'auth'], function () {
        Route::get('/bar/create', [BarController::class, 'create'])->name('bars.create');
        Route::post('/bar/store', [BarController::class, 'store'])->name('bars.store');

        Route::get('/bar/edit/{bar}', [BarController::class, 'edit'])->name('bars.edit');
        Route::post('/bar/update/{bar}', [BarController::class, 'update'])->name('bars.update');

        Route::post('/bar/delete/{bar}', [BarController::class, 'delete'])->name('bars.delete');
    });

Route::get ('/bar/proposals/{user}', [BarController::class, 'proposals'])->name ('bars.proposals');
    
Route::get ('/bar/{bar}', [BarController::class, 'show'])->name('bars.show');

Route::resource('/wine', WineController::class)->parameters(['wines']);


Route::get ('/contacto', [ContactController::class, 'create'])->name('contact');
Route::post ('/contacto', [ContactController::class, 'store']);


Auth::routes();


