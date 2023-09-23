<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller

{
    public function register()
    {
        return view('auth/register');
    }

    public function registersave(Request $request)
    {
        $incomingfileds = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],

            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $incomingfileds['password'] = bcrypt($incomingfileds['password']);
        User::create($incomingfileds);
        return view('auth/login');
    }
    public function login()
    {
        return view('auth/login');
    }


    public function loginsave (Request $request)
    {
      $incomingfileds = $request->validate(
        [
            'loginemail'=> 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['email'=> $incomingfileds['loginemail'], 'password'=> $incomingfileds['loginpassword']])){
            $request->session()->regenerate();
            return view('homepage');

        }
        else {
                return 'Fail';
        }
    }
}
