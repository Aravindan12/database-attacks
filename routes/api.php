<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/{id}', [UserController::class, 'sqlInject']);

Route::get('/user-by-raw/{id}', [UserController::class, 'sqlInjectOnRaw']);

Route::post('/user-by-statement', [UserController::class, 'sqlInjectOnStatement']);

Route::post('/user-save', [UserController::class, 'addUser']);
