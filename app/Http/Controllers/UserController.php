<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register () {
        return view ("pages.register");
    }

    public function login () {
        return view ("pages.login");
    }

    public function userregister (User $user ,  UserRequest $request) {
        $user->name = $request->username;
        $user->email = $request->usermail;
        $user->password = Hash::make($request->userpassword);
        $user->save();
        return redirect()->back()->with("success" , "$user->name , votre compte a été enregistré avec succèss");
        dd($request);
    }
}
