<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
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
Route::get('/',[StagiaireController::class,"index"]);
Route::get('/stagiaire/{id}', [StagiaireController::class, 'show'])->name('stagiaire.show');


Route::resource('/stagiaire',StagiaireController::class);
