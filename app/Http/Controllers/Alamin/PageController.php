<?php

namespace App\Http\Controllers\Alamin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view('pages.login');
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
    public function profil_coachee(){
        return view('pages.profil_coachee');
    }
}
