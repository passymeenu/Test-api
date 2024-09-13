<?php

use App\Http\Controllers\apiController;
use App\Http\Controllers\arrayPracticeController;
use App\Http\Controllers\DropdownController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(DropdownController::class)->group(function (){
//     Route::get('index',           'index');
//     Route::post('fetchState',     'fetchState');
//     Route::post('fetchCity',      'fetchCity');
// });



// Route::get('register',                [apiController::class, 'registerView'])->name('register');
// Route::post('register',               [apiController::class, 'register'])->name('registeruser');
// Route::get('login',             [apiController::class,'loginView'])->name('login');
// Route::post('login',             [apiController::class,'login'])->name('login');

// // Route::get( 'articleslist',             [apiController::class,'articleslist']);
// // Route::get( 'add',             [apiController::class,'add_article']);
// // Route::post( 'add',             [apiController::class,'add_article']);
