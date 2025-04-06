<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //validate form
        $validatedAttributes =request()->validate([
            'email'=> ['required','email'],
            'password' => ['required',Password::min(6),]
        ]);
        //attempt to login user
        if(! Auth::attempt($validatedAttributes)) //attampt return boolean and threre is remembered me in attampt if wanted .
        {
            throw ValidationException::withMessages([
                'email' => 'Sorry those credentials do not match.'
            ]);
        }
        //success then regenerate session token
        request()->session()->regenerate(); // it is for security that recycle the session. protect from session highjacking
        //redirect
        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy()
    {
        Auth::logout(); //no need to provide user as it generaly assume current user.
        return redirect('/');
    }
}
