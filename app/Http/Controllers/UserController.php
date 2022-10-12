<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register form
    public function create()
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6', 
        ]);

        // hash  the password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // login
        Auth()->login($user);

        return redirect('/')->with('message', 'User crated and logged in!!');
    }
}
