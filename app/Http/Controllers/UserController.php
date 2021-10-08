<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showLoginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        DB::connection('marrymama');
        $userData = DB::select("SELECT * FROM UserTable WHERE username=?", [$request->UserName]);

        if(!isset($userData[0]->UserName)){

            return view('login', ['err'=>"使用不存在"]);

        }elseif(password_verify($request->PassWord, $userData[0]->PassWord)){

            session(['username' => $userData[0]->UserName]);
            return redirect('/');

        }else{

            return view('login', ['err'=>"密碼錯誤"]);

        }
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/');
    }
}