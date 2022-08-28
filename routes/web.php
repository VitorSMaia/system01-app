<?php

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

Route::get('/', function () {
    return view('authjv.login');
})->name('login');

Route::view('welcome','welcome')->name('welcome');
Route::view('usuarios','adm.users.index')->name('adm.user.index');
Route::view('home','adm.home.index')->name('adm.home.index');
Route::view('config','adm.config.index')->name('adm.config.index');
