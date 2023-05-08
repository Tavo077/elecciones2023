<?php

use Illuminate\Support\Facades\Route;

Route::get('/candidatos', function () {
    return view('admin.candidatos.index');
})->name('candidatos.index');

Route::get('/usuarios', function () {
    return view('admin.usuarios.index');
})->name('usuarios.index');