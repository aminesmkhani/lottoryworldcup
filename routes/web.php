<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GamesController;
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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('lottery.main');})->name('dashboard');
    Route::get('/category',[CategoryController::class,'index']);
    Route::post('/category',[CategoryController::class,'store'])->name('storeCategory');
    Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('deleteCategory');

    Route::get('/games',[GamesController::class,'index']);
    Route::post('/games',[GamesController::class,'store'])->name('storeGame');
    Route::get('/game/delete/{id}',[GamesController::class,'destroy'])->name('deleteGame');
    Route::get('/game/active/{id}',[GamesController::class,'active'])->name('activeGame');

    Route::get('/winners',)
});
