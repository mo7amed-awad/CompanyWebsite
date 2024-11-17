<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::name('front.')->controller(FrontController::class)->group(function (){
    Route::post('subscriber/store','subscriberStore')->name('subscriber.store');
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/service','service')->name('service');
    Route::get('/contact','contact')->name('contact'); 
    Route::post('contact/store','contactStore')->name('contact.store');
});

Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function (){
    Route::middleware('auth')->group(function(){
        Route::view('/','admin.index')->name('index');
        Route::resource('services',ServiceController::class);
        Route::resource('features',FeatureController::class);
        Route::resource('messages',MessageController::class)->only('index','show','destroy');
        Route::resource('subscribers',SubscriberController::class)->only('index','destroy');
        Route::resource('testmonials',TestmonialController::class);
        Route::resource('settings',SettingController::class)->only('index','update');
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

