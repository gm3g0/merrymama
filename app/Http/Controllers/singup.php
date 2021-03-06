<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use mysqli;

class singup extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = session('account');
        if(!isset($account)) return view('singup.index');
        else return back();//如果已經登入，就返回上一頁

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singup()
    {
        //
        ini_set("display_errors","On");
       
        $email = $_POST['macount'];
        $password = $_POST['mpw'];
        $name = $_POST['name'];
        $tel = $_POST['phone'];
        $birthday = $_POST['birth'];
        $sex = $_POST['inlineRadioOptions'];

        require_once "../method/connect.php";
        $search =members::where('email','=',$email)->pluck('email');

        if( $email == '' || $password == '' || $name == '' || $tel == '' || $birthday == '' || $sex == ''){
            return back()->with('notice','輸入資料不完全！');
        }else{
            if($search == '["'.$email.'"]' ){
                return back()->with('notice','該電子郵件已被註冊！');
            }else{
                require_once "../method/connect.php";
                $insert = $connect -> prepare("INSERT INTO members(email,password,name,tel,birthday,sex)
                VALUES(?,?,?,?,?,?)");
                $insert -> execute(array($email,$password,$name,$tel,$birthday,$sex));
                return back()->with('notice','註冊成功！'); 
            }
        }
        
        
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
