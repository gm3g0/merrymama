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
        //
        return view('singup.index');
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
        require_once "../method/connect.php";
        $email = $_POST['macount'];
        $password = $_POST['mpw'];
        $name = $_POST['name'];
        $tel = $_POST['phone'];
        $birthday = $_POST['birth'];
        $sex = $_POST['inlineRadioOptions'];
        /*
        if(isset($_POST['submit'])){
            $search = "select `user` from register where user='$user'";
            $res=mysql_query($search);
            if(mysql_num_rows($res)>0){
            echo "<script>alert('使用者名稱已經存在！')</script>";
            }else {
          $query="insert into `register`(`id`,`user`,`password`) values (null,'".$_POST['user']."','".$_POST['password']."')";
            if(mysql_query($query)){
                echo '註冊成功！', header("location: user.php");
            }else{
                echo '失敗，請重新嘗試!',mysql_error();
            }
            die;
        }
        }*/
        
        
        
        
        
        
        
        /*$search =members::where('email',$email)->get();
        if(mysql_num_rows($search)>0)
        {
            echo "<script>alert('該電子郵件已被註冊！')</script>";
        }
        else 
        {
            $insert -> execute(array($email,$password,$name,$tel,$birthday,$sex));
        }
        $insert = $connect -> prepare("INSERT INTO members(email,password,name,tel,birthday,sex)
          VALUES(?,?,?,?,?,?)");
        /*先給一個變數 if判斷*/
        
       

       header("location:../?sig_suc=註冊成功");
        return redirect()->route('member.index');
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
