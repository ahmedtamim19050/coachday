<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() {
        return view('user.dashbaord');
    }
    public function settings() {
        return view('user.settings');
    }
    public function settingsUpdate(Request $request) {
        dd($request->all());
    }
}
