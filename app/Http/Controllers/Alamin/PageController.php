<?php

namespace App\Http\Controllers\Alamin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function forgot_password(){
        return view('pages.forgot_password');
    }

    public function registration(){
        return view('pages.registration');
    }
    public function registration_coach(){
        return view('pages.registration_coach');
    }
    public function checkout_coach(){
        return view('pages.checkout_coach');
    }
    public function checkout_coachee(){
        return view('pages.checkout_coachee');
    }
}
