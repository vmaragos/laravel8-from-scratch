<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validation
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Authentication attempt
        if (! auth()->attempt($attributes)){
            // Error message if authentication attempt fails
            throw ValidationValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]); 
        }

        session()->regenerate();
        
        return redirect('/')->with('success', 'Welcome Back!');
    }
}
