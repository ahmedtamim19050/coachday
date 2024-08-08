<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function findCoach()
    {
        return view('pages.find_coach');
    }
}
