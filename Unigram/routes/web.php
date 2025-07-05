<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UNI;
use App\Http\Controllers\post_controller;
use App\Http\Controllers\admin_controller;
use Illuminate\Routing\Router;

Route::get('/',[UNI::class, 'index'])->name('index');
Route::get('index',[UNI::class, 'index'])->name('index');
Route::get('login',[UNI::class, 'login'])->name('login');
Route::get('register',[UNI::class, 'register'])->name('register');
Route::get('profile',[UNI::class, 'profile']);
Route::get('ranking',[UNI::class, 'ranking']);
Route::get('create_post',[UNI::class, 'create_post']);


// Actions 
Route::post('register_action',[UNI::class, 'register_action'])->name('register_action');
Route::post('login_action',[UNI::class, 'login_action']);
Route::get('logout',[UNI::class, 'logout']);



// Post Controller Routes 
Route::post('create_post_action',[post_controller::class, 'create_post_action'])->name('create_post_action');




//Admin Controller ROuTes 
Route::get('admin_index',[admin_controller::class, 'admin_index'])->name('admin_index');
Route::get('admin_create',[admin_controller::class, 'admin_create'])->name('admin_create');
Route::get('admin_register',[admin_controller::class, 'admin_register'])->name('admin_register');
Route::get('admin_university',[admin_controller::class, 'admin_university'])->name('admin_university');

Route::post('admin_register_action',[admin_controller::class, 'admin_register_action']);
Route::post('admin_university_view',[admin_controller::class, 'admin_university_view'])->name('admin_university_view');
