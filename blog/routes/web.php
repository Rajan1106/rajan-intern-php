<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
Route::get('/',function(){
    return view('welcome');
});

Route::get('/home',[homecontroller::class, 'home'])->name('home.home');
Route::get('/home/create',[homecontroller::class,'create'])->name('home.create');
Route::post('/home/store',[homecontroller::class,'store'])->name('home.store');