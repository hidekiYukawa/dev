<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show register/create form
    public function create() {
        return view('users.register');
    }

    // log user out
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/properties')->with('message', 'You have been logged out!');
    }

    // show log user in form
    public function login() {
        return view('users.login');
    }

    // log user in
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/properties')->with('message', 'Welcome back ');
        }
            return back()->withErrors(['email' => 'Invalid Credentials'])
            ->onlyInput('email');

    }

    // create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'], //minimum 3 characters required
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);


        // hash the password
        $formFields['password'] = bcrypt($formFields['password']);

        // create the user after validation and hashing
        $user = User::create($formFields);

        // login
        auth()->login($user);

        return redirect('/properties')->with('message', 'User created successfully! You are now logged in.');

    }
}
