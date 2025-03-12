<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','confirmed',Password::min(6)],
        ]);

        $employerAttributes =$request->validate([
            'employer'=>['required'],
            'logo'=>['required',File::types(['jpg','jpeg','png','webp'])],
        ]);

        $user = User::create($userAttributes);
        $logo_path = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo'=>$logo_path,
        ]);
        //$user->employer()->create($employerAttributes);
        Auth::login($user);
        return redirect('/');
    }
}
