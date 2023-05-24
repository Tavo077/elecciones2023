<?php

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\PartiesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VotesController;
use Illuminate\Support\Facades\Route;

/* Route::get('/candidatos', function () {
    return view('admin.candidatos.index');
})->name('candidatos.index'); */


Route::get('voto', [VotesController::class, 'index'])->name('voto.index');
Route::post('voto', [VotesController::class, 'store'])->name('voto.store');

Route::resource('usuarios', UsersController::class)->names('usuarios');
Route::resource('candidatos', CandidatesController::class)->names('candidatos');
Route::resource('partidos', PartiesController::class)->names('partidos');
