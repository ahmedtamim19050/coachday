<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function dashboard() {
        return view('user.dashbaord');
    }
    public function settings() {
        return view('user.settings');
    }
    public function settingsUpdate(Request $request) {
        $request->validate([
            'email' => ['required', 'email', Rule::unique('users')->ignore(auth()->id())],
        ]);

        if($request->has('meta')){
            auth()->user()->createMetas($request->meta);
        }
  
        if($request->email){
            auth()->user()->update([
                'email'=>$request->email,
            ]);
        }
        return back()->with('success','settings updated');
    }
}
