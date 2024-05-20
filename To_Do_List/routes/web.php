<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDolistController;
use App\Http\Controllers\CustomAuthController;



Route::get('/', [ToDolistController::class, 'index']) -> name('index');
Route::post('/', [ToDolistController::class, 'store']) -> name('store');
Route::delete('/{to_do_lists:id}',[ToDolistController::class, 'destroy']) -> name('destroy');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');