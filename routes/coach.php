<?php

use App\Http\Controllers\Coach\PageController;
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

Route::group(['prefix' => 'coaching-profil', 'middleware' => ['auth', 'role:coach'], 'as' => 'coach.'], function () {
    Route::get('/bearbeiten', [PageController::class, 'coach'])->name('coach');
    Route::post('/update_or_store', [PageController::class, 'update_or_store'])->name('update_or_store');
});
