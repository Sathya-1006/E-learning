<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ResetPasswordController;

Route::get('/reset-password', [ResetPasswordController::class, 'showForm']);
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword']);
