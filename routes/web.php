<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;



Route::get('/heatmap', [LocationController::class, 'index'])->name('heatmap');


    



Route::get('/', function () {
    return view('welcome');
});
Route::get('/sos', function () {
    return view('sos');
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//IMPLEMENTANDO LOCATION

Route::post('/store',[LocationController::class, 'store'])->name('store');



Route::group(['middleware' => 'auth'], function() {

Route::resource('registros',\App\Http\Controllers\registroController::class);

//Trabajando

//Route::resource('registros',\App\Http\Controllers\registroController::class);



Route::resource('registrosos',\App\Http\Controllers\sosController::class);

Route::resource('reportes',\App\Http\Controllers\tipoincidenciaController::class);




//RUTAS PARA CRUD-USUARIOS
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

    Route::resource('posts', App\Http\Controllers\PostController::class);


    //RUTAS PARA CREAR PERMISOS Y ROLES
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
});

