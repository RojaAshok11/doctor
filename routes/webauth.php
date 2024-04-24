<?php

use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;
use App\Http\Controllers\Admin\Web\Auth\AdminloginController;
use App\Http\Controllers\Admin\Web\Auth\AdminRegisterController;

Route::get('/admin/session', function () {
    (session('adminsessiontoggled') == 'toggled') ? session()->forget('adminsessiontoggled') : session(['adminsessiontoggled' => 'toggled']);
})->middleware('auth', 'preventbackbutton');

Route::get('logs', [LogViewerController::class, 'index']);

Route::controller(AdminloginController::class)
    ->group(function () {
        //   Route::get('/', 'showadminloginform')->name('adminlogin');
        Route::get('admin/login', 'showadminloginform')->name('adminshowlogin');
        Route::get('admin/register', 'adminregister')->name('adminregister');
        Route::post('admin/login', 'adminlogin')->name('adminloginpost');
        Route::match(['get', 'post'], 'logout', 'logout')->name('adminlogout');
    });
    Route::controller(AdminRegisterController::class)
    ->group(function () {
        //   Route::get('/', 'showadminloginform')->name('adminlogin');
        Route::get('admin/register', 'showadminregisterform')->name('adminregisterlogin');
        Route::post('admin/register', 'adminregister')->name('adminregister');
        Route::match(['get', 'post'], 'logout', 'logout')->name('adminlogout');
    });
