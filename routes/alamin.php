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


Route::get('passwort-zuruecksetzen', [PageController::class, 'forgot_password'])->name('forgot_password');
Route::get('registrierung', [PageController::class, 'registration'])->name('registration');
Route::get('registrierung-coach', [PageController::class, 'registration_coach'])->name('registration_coach');
Route::get('checkout-coach', [PageController::class, 'checkout_coach'])->name('checkout_coach');
Route::get('checkout-coachee', [PageController::class, 'checkout_coachee'])->name('checkout_coachee');

