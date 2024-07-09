<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MainController;


Route::group(['middleware'=>'auth'], function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [MainController::class,'main'])->name('main');

    Route::get('/dashboard', [MainController::class,'dashboard'])->name('dashboard');

    Route::resource('aplications',ApplicationController::class);
});



require __DIR__.'/auth.php';
