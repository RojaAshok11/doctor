<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\ContactController;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
// Route::get('send-mail', [ContactController::class, 'sendDemoMail']);
