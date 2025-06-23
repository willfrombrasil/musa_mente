<?php

use App\Http\Controllers\TesteController;
use App\Mail\NewTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(TesteController::class)->group(function () {

    Route::get('/', 'index')->name('cliente.index');
    Route::post('/', 'store')->name('cliente.store');
    Route::get('/obg', 'obg')->name('cliente.obg');

    Route::prefix('admin')->group(function () {
        Route::get('/', 'admin')->name('admin')->middleware('auth');
        Route::post('/', 'filter')->name('admin.filter')->middleware('auth');
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'logar')->name('logar');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/relatorio', 'relatorio')->name('relatorio');
    });

    Route::get('/{chave}/{protocolo}', 'show')->name('cliente.show');
});

Route::fallback(function ($err) {
    return view("404");
});
