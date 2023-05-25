<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

 Route::get('/', [PublicController::class, 'home'])->name('home');
 Route::get('/html5', [PublicController::class, 'html5'])->name('html5');
 Route::get('/css3', [PublicController::class, 'css3'])->name('css3');
 Route::get('/bootstrap', [PublicController::class, 'bootstrap'])->name('bootstrap');
 Route::get('/coding', [PublicController::class, 'coding'])->name('coding');
 