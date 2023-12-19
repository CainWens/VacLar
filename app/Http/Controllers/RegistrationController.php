<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function reg(RegistrationRequest $req){
        $user = new User();

        $user->name = $req->input('name');
        $user->phone = $req->input('phone');
        $user->password = $req->input('password');

        $user->save();

        return redirect()->route('home')->with('success','Сообщение отправлено!');
    }
}
