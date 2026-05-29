<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('client')
    ->group(function () {

        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');
        
    });
