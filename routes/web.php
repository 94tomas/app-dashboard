<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('alertas', function () {
        return view('dashboard.alerts');
    });
    Route::get('botones', function () {
        return view('dashboard.buttons');
    });
    Route::get('campos-de-texto', function () {
        return view('dashboard.text-fields');
    });
    Route::get('textarea', function () {
        return view('dashboard.textarea');
    });
    Route::get('parallax', function () {
        return view('dashboard.parallax');
    });
    Route::get('configuracion', function () {
        return view('dashboard.configuracion');
    });
    Route::get('mi-cuenta', function () {
        return view('dashboard.mi-cuenta');
    });
});
