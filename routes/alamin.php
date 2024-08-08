<?php

use App\Http\Controllers\Alamin\PageController;
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

Route::get('test',function(){
    dd('alamin');
});

Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('registrierung', [PageController::class, 'registration'])->name('registration');
