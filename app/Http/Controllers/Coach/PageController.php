<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function coach() {
        return view('coach.coach_create');
    }
    public function update_or_store(Request $request)  {
        dd($request->all());
    }
}
