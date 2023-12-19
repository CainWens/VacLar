<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $req){
        if(Auth::attempt($req->only('phone','password'),$req->boolean('remember'))){
            $req->session()->regenerate();
            return redirect()->route('home');
        }
        return back()
            ->withInput()
            ->withErrors([
                'phone'=>'Пользователя с такими данными не существует'
            ]);
    }

    public function destroy(Request $req){
        Auth::logout();
        return redirect()->route('home');
    }
}
