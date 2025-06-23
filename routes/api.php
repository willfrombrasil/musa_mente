<?php

use App\Http\Controllers\TesteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/ping', function () {
    return 'pong';
});

// Route::post('/test_send_mail', [TesteController::class, 'testeSendMail']);
Route::post('/fakeApi', [TesteController::class, 'fakeApi']);
Route::post('/testeApi', [TesteController::class, 'testeApi']);
Route::post('/importApi', [TesteController::class, 'importApi']);
Route::post('/fakers', [TesteController::class, 'fake']);
