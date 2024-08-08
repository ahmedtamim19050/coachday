<?php

use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/coach-suchen',[PageController::class,'findCoach'])->name('find.coach');
Route::get('/coach-werden',[PageController::class,'becomeCoach'])->name('become.coach');
Route::get('/magazin',[PageController::class,'posts'])->name('posts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

require('alamin.php');
require('user.php');