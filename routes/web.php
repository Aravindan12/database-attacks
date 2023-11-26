<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/user', function () {
//     return view('users');
// })->name('user');

Route::get('/user/{name}', [UserController::class, 'sqlInject']);

// attacking script
// http://127.0.0.1:8000/xss-attack/?name=%3Cscript%3Ealert(%22Hahaha!!!%20you%20got%20hacked!!!%22)%3C/script%3E
Route::get('/xss-attack', [UserController::class, 'xssAttack']);

//http://127.0.0.1:8000/xss-attack-2/?name=%3Cscript%3Ewindow.location.href%20=%20%22http://stackoverflow.com%22;%E2%80%9D%3C/script%3E
Route::get('/xss-attack-2', [UserController::class, 'xssAttackTwo']);

Route::get('/test', [TestController::class, 'test']);

Route::get('/add/{num1}/{num2}', [TestController::class, 'add']);
Route::get('/subtract/{num1}/{num2}', [TestController::class, 'subtract']);
Route::get('/multiply/{num1}/{num2}', [TestController::class, 'multiply']);
Route::get('/divide/{num1}/{num2}', [TestController::class, 'divide']);

Route::get('/add-user', [UserController::class, 'addNewUser'])->name('add-user');
Route::post('/store-user', [UserController::class, 'storeUser'])->name('store-user');
Route::get('/list-users', [UserController::class, 'listUsers'])->name('list-users');
