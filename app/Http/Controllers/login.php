<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
        ini_set("display_errors", "On");
       $account = $_POST['macount'];
       $password = $_POST['mpw'];
      $select = $connect -> prepare("SELECT email,password FORM member WHERE email = macount AND password = mpw");
       $select -> execute(array('macount' => $account,'mpw' => $password));
       $result = $select -> fetch(PDO::FETCH_ASSOC) ;
          if ($result['account']==$account&&$result['password']==$password) {
               session_start();
               $_SESSION['member'] = $result;
               header("location:./?error=登入成功");
          }elseif ($result['password']!=$password||$result['account']!=$account) {
                      header("location:./?error=帳密錯誤");
          }elseif ($result['password']!=''||$result['account']!='') {
                      header("location:./?error=輸入不完全");
          }

        return redirect()->route('homepage.index');
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
