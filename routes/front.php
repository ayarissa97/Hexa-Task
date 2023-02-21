<?php


use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
//use App\Http\Controllers\TeamController;
//use App\Http\Controllers\AboutController;
//use App\Http\Controllers\ChooseController;
//use App\Http\Controllers\ServiceController;
//use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\SettingController;





Route::get('/' , [HomeController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/choose', [FrontController::class, 'choose'])->name('choose');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/team', [FrontController::class, 'team'])->name('team');


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
