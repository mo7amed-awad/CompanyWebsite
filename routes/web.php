<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::name('front.')->group(function (){
    Route::view('/','front.index')->name('index');
    Route::view('/about','front.about')->name('about');
    Route::view('/service','front.service')->name('service');
    Route::view('/contact','front.contact')->name('contact');
});

Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function (){
    Route::middleware('auth')->group(function(){
        Route::view('/','admin.index')->name('index');
        Route::resource('services',ServiceController::class);
        Route::resource('features',FeatureController::class);
        Route::resource('messages',MessageController::class)->only('index','show','destroy');
    });
    require __DIR__.'/auth.php';
});


































// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

