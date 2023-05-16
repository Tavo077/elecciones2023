<?php

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/* Route::get('/candidatos', function () {
    return view('admin.candidatos.index');
})->name('candidatos.index'); */

Route::resource('usuarios', UsersController::class)->names('usuarios');
Route::resource('candidatos', CandidatesController::class)->names('candidatos');
