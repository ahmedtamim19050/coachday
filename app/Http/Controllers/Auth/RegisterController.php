<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function redirectTo()
    {

        switch (auth()->user()->role_id) {
            case 1:
                return RouteServiceProvider::ADMIN;
                break;
            case 2:
                return RouteServiceProvider::USER;
                break;

            case 3:
                return RouteServiceProvider::COACH;
                break;

         

            default:
                return RouteServiceProvider::HOME;
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:8'],
            'role'=>'required',
        ])
        ->sometimes('meta.f_name', 'required', function ($input) {
            return $input->role === 'coach';
        })
        ->sometimes('meta.l_name', 'required', function ($input) {
            return $input->role === 'coach';
        })
        ->sometimes('email', 'required | string | email | max:255 |unique:users| confirmed ', function ($input) {
            return $input->role === 'coach';
        })
        ->sometimes('email', 'required | string | email | max:255 |unique:users ', function ($input) {
            return $input->role === 'user';
        });
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $role=Role::where('name',$data['role'])->first();
        $user= User::create([
            'email' => $data['email'],
            'role_id'=>$role->id,
            'password' => Hash::make($data['password']),
        ]);
        if($data['meta']){
            $user->createMetas($data['meta']);
        }
        return $user;
    }
}
