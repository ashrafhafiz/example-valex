<?php

 namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/{locale}', function ($locale) {
//
//    if (!in_array($locale, ['en', 'ar'])) {
//        return view('404');
//    }
//
//    App::setLocale($locale);
//
//    return view('auth.signin');
//});

Route::get('/', function () {
    return view('auth.signin');
});

Auth::routes();
//Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/{locale}/{page}', [AdminController::class, 'index']);
