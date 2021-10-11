<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showLoginPage()
    {
        return view('login.php');
    }

    public function login(Request $request)
    {
        DB::connection('marrymama');
        $userData = DB::select("SELECT * FROM members WHERE email=?", [$request->email]);

        if(!isset($userData[0]->email)){

            return view('login', ['err'=>"使用不存在"]);

        }elseif(password_verify($request->password, $userData[0]->password)){

            session(['email' => $userData[0]->email]);
            return redirect('/');

        }else{

            return view('login', ['err'=>"密碼錯誤"]);

        }
    }

    public function logout()
    {
        session()->forget('email');
        return redirect('/');
    }
}