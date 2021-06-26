<?php

use App\Http\Controllers\CadasVoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotosCad;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::post('submit', [CadasVoto::class, 'save']);
Route::view('form', 'admin/votos');


Route::view('login', 'admin/login');
Route::post('loginpage', [UserController::class, 'login'])->name('page.login');
