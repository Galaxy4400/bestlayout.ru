<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::post('/request', [HomeController::class, 'requestForm'])->name('request_form_process');