<?php

use App\Http\Controllers\authManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/user-login', [authManager::class, 'userlogin']);
Route::get('/auth/signup', [authManager::class, 'signup'])->name('adminsignup.page');
Route::post('/auth/signup', [authManager::class, 'signuppostadmin'])->name('adminsignup');
Route::get('/auth/login',[authManager::class, 'login'])->name('adminlogin');
Route::post('/auth/login',[authManager::class, 'loginpostadmin'])->name('loginpostadmin');
Route::get('/admin/dashboard',function (){
    return view('/admin/dashboard');
})->name('dashboard');
