<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

use Illuminate\Routing\Controller;


use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class UserController extends Controller
{
    //
    public function login()
    {
        return view('users.userLogin');
    }
    public function signup()
    {
        return view('users.userRegister');
    }

    public function createUser(Request $request)
    {
        $inputData = $request->validate(
            [
                'fullName' => 'required',
                'email' => ['required', 'email'],
                'password' => ['required', 'confirmed', 'min:6']

            ]
        );

        $inputData['password'] = bcrypt(($inputData['password']));

        $user = User::create($inputData);
        auth()->login($user);
        return  redirect('/login')->with('createMessage', 'User Created Successfully!');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('message', 'Logged Out Successfully!');
    }
    public function loginUser(Request $request)
    {
        $inputData = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );
        if (auth()->attempt($inputData)) {
            $request->session()->regenerate();
            return  redirect('/')->with('createMessage', 'Logged In Successfully!');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
