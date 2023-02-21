<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::group(['prefix' => 'admin'], function () {
            Route::get('/', [DashboardController::class, 'index']);
            Route::resource('/services', ServiceController::class);
            Route::resource('/about' , AboutController::class);
            Route::resource('/team' , TeamController::class);
            Route::resource('/choose' , ChooseController::class);
            Route::resource('/settings' , SettingController::class);
            });


    });


require __DIR__.'/front.php';

