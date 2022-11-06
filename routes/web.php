<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User10Controller;
use App\Http\Controllers\Agama10Controller;
use App\Http\Controllers\Login10Controller;

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

Route::get('/user', function () {
    return view('user');
});

Route::get('/user10', [Login10Controller::class, 'user10']);
Route::get('/agama10', [Agama10Controller::class, 'agama10']);
Route::get('/detail_data10', [BlogController::class, 'detail_data10']);
