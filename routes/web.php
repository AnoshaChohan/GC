<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/', 'welcome');
Auth::routes();
Route::get('/login/nonpaiduser', [LoginController::class,'shownonpaiduserLoginForm']);
Route::get('/register/nonpaiduser',[RegisterController::class,'shownonpaiduserRegisterForm']);
Route::post('/login/nonpaiduser', [LoginController::class,'nonpaiduserLogin']);
Route::post('/register/nonpaiduser', [RegisterController::class,'createnonpaiduser']);
Route::post('/login', [LoginController::class, 'authenticateUser'])->name('login');

Route::group(['middleware' => 'auth:nonpaiduser'], function () {
Route::view('/nonpaiduser', 'nonpaiduser');
});

Route::get("deleteUser/{id}", [UserController::class,'deleteUser']);
Route::get("updateUser/{id}", [UserController::class,'show1Update']);
Route::post("/updateUser1", [UserController::class,'updateUser']);

Route::get('logout', [LoginController::class,'logout']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/testData', [UserController::class, 'testData']);
Route::view('/userinner', 'userInner');
