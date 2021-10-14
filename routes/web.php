<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
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
    return view('testPage');
});

Route::get('/test', [TestController::class, 'show']);

Route::get('auth/steam', [AuthController::class, "redirectToSteam"])->name('auth.steam');
Route::get('auth/steam/handle', [AuthController::class, "handle"])->name('auth.steam.handle');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
