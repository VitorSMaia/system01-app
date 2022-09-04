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

Route::get('/',[\App\Http\Controllers\Auth\AuthController::class , 'index'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::view('welcome','welcome')->name('welcome');
    Route::view('home','adm.home.index')->name('adm.home.index');
    Route::view('config','adm.config.index')->name('adm.config.index');


    Route::post('/login',[\App\Http\Controllers\Auth\AuthController::class , 'login'])->name('login.do');
    Route::get('/logout',[\App\Http\Controllers\Auth\AuthController::class , 'logout'])->name('logout');


    Route::view('usuarios','adm.users.index')->name('adm.user.index');
    Route::view('usuarios/create','adm.users.create')->name('adm.user.create');
    Route::get('usuarios/edit/{id}',function($id) {
        return view('adm.users.edit',['id' => $id]);
    })->name('adm.user.edit');

    Route::view('cargos','adm.positions.index')->name('adm.position.index');
    Route::view('cargos/create','adm.positions.create')->name('adm.position.create');
    Route::get('cargos/edit/{id}',function($id) {
        return view('adm.positions.edit',['id' => $id]);
    })->name('adm.position.edit');

});

