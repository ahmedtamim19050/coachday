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
}
