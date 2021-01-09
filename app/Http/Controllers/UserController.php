<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create()
    {
      return view('user.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'avatar' => 'nullable|image'
        ]);

        if($request->hasFile('avatar')){
           $folder = date('Y-m-d');
        }

       $avatar = $request->file('avatar')->store("images/$folder");
       
     $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
           'avatar' => $avatar ?? null
       ]);

       session()->flush('success','REGISTERED!');
       Auth::login($user);
       return redirect()->route('home');
    }

   public function loginForm()
   {
     return view('user.login');
   }

   public function login(Request $request)
   {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {
        return redirect()->route('home');
    };
    return redirect()->back()->with('error','invalid login or password!');
   }

   public function logout()
   {
     Auth::logout();
     session()->flush('success','LOG OUTED!');
     return redirect()->route('login.create');
   }

}


