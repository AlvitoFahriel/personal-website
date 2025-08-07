<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
require __DIR__.'/auth.php';
