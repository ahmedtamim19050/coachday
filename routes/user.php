<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\User\PageController as UserPageController;
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




Route::group(['prefix' => 'profil-coachee/','middleware' => ['auth', 'role:user'],'as'=>'user.'], function () {
    Route::get('/buchungen',[UserPageController::class,'dashboard'])->name('dashboard');
    Route::get('/einstellungen',[UserPageController::class,'settings'])->name('settings');
    Route::post('/einstellungen',[UserPageController::class,'settingsUpdate'])->name('settings.update');
});