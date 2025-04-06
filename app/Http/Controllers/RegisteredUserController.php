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
            'user_type' => ['required'],
            'contact' => ['required','numeric','unique:users,contact'],
        ]);
        $user = User::create($userAttributes);
        Auth::login($user);


        if ($request->user_type == 'Em') {
            return redirect()->route('employer.info', ['user_id' => $user->id]);
        } else {
            return redirect()->route('jobseeker.info', ['user_id' => $user->id]);
        }

        $employerAttributes =$request->validate([
            'employer'=>['required'],
            'logo'=>['required',File::types(['jpg','jpeg','png','webp'])],
        ]);


        $logo_path = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo'=>$logo_path,
        ]);
        //$user->employer()->create($employerAttributes);
        }

       // public function append(Request $request,User $user)
        //{
         //   dd($user->email,$user->password);
        //}
}
