<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use PDO;
use PharIo\Manifest\Email;
use App\Models\members;
use Illuminate\Contracts\Session\Session;
use session_register;

class login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $account = session('account');
        if(!isset($account)) return view('login.index');
        else return back();//如果已經登入，就返回上一頁

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        /*DB::connection('merrymama');
        $userData = DB::select("SELECT * FROM members WHERE email=?", [$request->email]);

        if(!isset($userData[0]->email)){

            return view('login', ['err'=>"使用不存在"]);

        }elseif(password_verify($request->password, $userData[0]->password)){

            session(['email' => $userData[0]->email]);
            return redirect('/');

        }else{

            return view('login', ['err'=>"密碼錯誤"]);

        }*/
        ini_set("display_errors", "On");
        require_once "../method/connect.php";


        $account = $_POST['macount'];
        $password = $_POST['mpw'];
        // $account=$request->input('macount');
        // $password=$request->input('mpw');

        $checkaccount = members::where('email', $account )->pluck('email');
        $checkpassword = members::where('password', $password )->pluck('password');
        $checkproof = members::where('email', $account )->pluck('proof');
        $checkproof = json_decode(strval($checkproof))[0];

        if ($account == "" || $password == "") {
            return back()->with('notice', '請輸入帳號及密碼！' );
         
        }elseif( ('["' . $account . '"]' == $checkaccount ) && ('["' . $password . '"]' == $checkpassword)) {
            session(['account' => $account]);
            if($checkproof == 0){
                return redirect('/');
            }else{
                return view('edit_homepage.index');
            }
            
         
         
                   
        } else {
            return back()->with('notice', '帳號或密碼輸入錯誤！' );
        }

        // if(('["' . $account . '"]' == $checkaccount ) && ('["' . $password . '"]' == $checkpassword)){
        //     $minute=5;
        //     $response=new Response("hello");
        //     $response->withCookie(cookie('acc',$account,$minute));
        //     $response->withCookie(cookie('pwd',$password,$minute));
        //     dump($cookies);
        //     return back()->with('notice', '登入成功！');
        // }
            
           //
            
            //return $response;

    }
    public function logout(){
        session()->forget('account');
        return redirect('/');
    }

}
