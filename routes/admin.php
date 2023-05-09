<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/candidatos', function () {
    return view('admin.candidatos.index');
})->name('candidatos.index');

Route::resource('usuarios', UsersController::class)->names('usuarios');
