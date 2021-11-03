<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\order;
use App\Models\member_order;
use App\Models\detail_order;

class be_member extends Controller
{
    
    public function index()  //會員專區的訂單查看頁面
    {
        $account = session('account');
        //$test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改
        $dataorder = order::where('email' , $account)->get();
        $datadetail_order = detail_order::all();
        if(!isset($account)) return redirect()->route('login.index');
        elseif($account == 'admin@nutc.edu.tw') return redirect('/');
        else return view('be_member.check', ['account' => $account , 'dataorder' => $dataorder , 'datadetail_order' => $datadetail_order ]);//如果已經登入，就返回上一頁
    }

    public function create() //會員專區的修改資料頁面
    {
        $account = session('account');
        //$test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改
        $datamember = members::where('email' , $account)->first();
        if(!isset($account)) return redirect()->route('login.index');
        elseif($account == 'admin@nutc.edu.tw') return redirect('/');
        else return view('be_member.edit' , ['account' => $account ,'datamember' => $datamember]);//如果已經登入，就返回上一頁
        
    }

    public function member(Request $request) //會員專區的修改資料表單處理部分
    {
        $account = session('account');
        //$test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改
        $mem = members::where('email' , $account)->first();
        $memname = members::where('email' , $account)->pluck('name');
        $memname = json_decode($memname)[0];
        $memtel = members::where('email' , $account)->pluck('tel');
        $mempw = members::where('email' , $account)->pluck('password');
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $pw = $_POST['pw'];

        if( ($pw == '') || ($tel == '') || ($name == '') ){
            return back()->with('notice','請勿有空白欄位！');
        }elseif( ($mempw != '["' . $pw . '"]') || ($memtel != '["' . $tel . '"]') || ( trim($memname) !=  $name ) ){
            $mem->password = $pw;
            $mem->tel = $tel;
            $mem->name = $name;
            $mem->save();
            return back()->with('notice','修改成功！');
        }else{
            return back()->with('notice','請對資料做變動！');
        }

    }

}
