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
        $email = session('email');
        //return view('index', ['email' => $email]);
        //$test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改
        $dataorder = order::where('email' , $email)->get();
        $datadetail_order = detail_order::all();
        return view('be_member.check', [ 'dataorder' => $dataorder , 'datadetail_order' => $datadetail_order ]);
    }

    public function create() //會員專區的修改資料頁面
    {
        $email = session('email');
        //$test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改
        $datamember = members::where('email' , $email)->first();
        return view('be_member.edit' , ['datamember' => $datamember]);
    }

    public function member(Request $request) //會員專區的修改資料表單處理部分
    {
        $email = session('email');
        //$test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改
        $mem = members::where('email' , $email)->first();
        $memname = members::where('email' , $email)->pluck('name');
        $memname = json_decode($memname)[0];
        $memtel = members::where('email' , $email)->pluck('tel');
        $mempw = members::where('email' , $email)->pluck('password');
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
