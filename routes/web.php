<?php

use App\Http\Controllers\DietController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/diet',[DietController::class,'index'])->name('diet');
    Route::get('/TambahDiet',[DietController::class,'add'])->name('add-diet');
    Route::post('/SimpanDiet',[DietController::class,'store'])->name('save-diet');
    Route::get('/UpdateDiet/{id}',[DietController::class,'show'])->name('show-diet');
    Route::post('/StoreDiet/{id}',[DietController::class,'update'])->name('update-diet');
    Route::get('/DietDetail/{id}',[DietController::class,'detail'])->name('detail-diet');

});
