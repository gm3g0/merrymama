<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use PharIo\Manifest\Email;
use App\Models\members;

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
        
        return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {

        ini_set("display_errors", "On");
        require_once "../method/connect.php";


        $account = $_POST['macount'];
        $password = $_POST['mpw'];
        $checkaccount = members::where('email', $account )->pluck('email');
        $checkpassword = members::where('password', $password )->pluck('password');
        //$select = $connect->prepare("SELECT * FROM members WHERE email = :acc AND password = :pw");
        //$select->execute(array(':acc' => $account, ':pw' => $password));
        

        //$result = $select->fetch(PDO::FETCH_ASSOC);
        

        //if ($result['email'] == $account && $result['password'] == $password) {
                //session_start();
                //$_SESSION['member'] = $result;
                //header("location:../");
         //}
        if ($account == "" || $password == "") {
            return back()->with('notice', '請輸入帳號及密碼！' );
            
        }elseif( ('["' . $account . '"]' == $checkaccount ) && ('["' . $password . '"]' == $checkpassword)) {
            return redirect('/')->with('notice', '登入成功！');
           
        } else {
            return back()->with('notice', '帳號或密碼輸入錯誤！' );
        }
    }
    public function logout(){
        session()->forget('account');
        return redirect('/logout');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
