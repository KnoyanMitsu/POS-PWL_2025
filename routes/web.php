<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::get('/level',[LevelController::class, 'index']);
Route::get('/user',[UserController::class, 'index']);
Route::get('/kategori',[KategoriController::class, 'index']);

// Route::prefix('category')->group(function (){
    // Route::get('/food-beverage', [CategoryController::class,'beverage'])->name("beverage");
    // Route::get('/beauty-health', [CategoryController::class,'beauty'])->name("beauty");
    // Route::get('/home-care', [CategoryController::class,'homecare'])->name("homecare");
    // Route::get('/baby-kid', [CategoryController::class,'babykid'])->name("babykid");
// });

// Route::get('/user/{id}/name/{name}',[UserController::class,'user']);

Route::post('/transaction',[TransactionController::class,'transcation'])->name('transcation');
