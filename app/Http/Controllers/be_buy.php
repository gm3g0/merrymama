<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\takedate;
use App\Models\products;
use App\Models\order;
use App\Models\detail_order;
use App\Models\members;

class be_buy extends Controller
{

    public function index()   //前台我要購買頁面
    {
         
        $choosetime = takedate::max('choose_time');  //取得最新設定時間
        $takedates = takedate::where('choose_time',$choosetime)->pluck('tekedate_time'); //取得當次取貨日期
        $takedate = str_replace('["','',$takedates); //str_replace取代字串中a字元為b('a','b','字串') 在此為刪除不必要符號
        $takedate = str_replace('"]','',$takedate);
        $weeks = takedate::where('choose_time',$choosetime)->pluck('week'); //取得當次取貨星期 
        $week = json_decode($weeks)[0]; //將亂碼轉為jason陣列或物件
        
        if( trim($week) == "星期一" ){ //trim()刪除字串前的空白
            $Ptype = products::where('type','like','%星期一%')->get();
            return view('be_buy.index', ['takedate' => $takedate , 'week' => $week , 'Ptype' => $Ptype]);
        }elseif(trim($week) == "星期二"){
            $Ptype = products::where('type','like','%星期二%')->get();
            return view('be_buy.index', ['takedate' => $takedate , 'week' => $week , 'Ptype' => $Ptype]);
        }elseif(trim($week) == "星期三"){
            $Ptype = products::where('type','like','%星期三%')->get();
            return view('be_buy.index', ['takedate' => $takedate , 'week' => $week , 'Ptype' => $Ptype]);
        }elseif(trim($week) == "星期四"){
            $Ptype = products::where('type','like','%星期四%')->get();
            return view('be_buy.index', ['takedate' => $takedate , 'week' => $week , 'Ptype' => $Ptype]);
        }else{
            $Ptype = products::where('type','like','%星期五%')->get();
            return view('be_buy.index', ['takedate' => $takedate , 'week' => $week , 'Ptype' => $Ptype]);
        }
    }

    public function create(Request $request)  //前台我要購買填寫資料部分
    {   
        $test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改
        $takedate = $_POST['takedate'];   //抓到取貨日期
        $savePName = $_POST['PName'];     //抓到所有商品名稱
        $savenum = $_POST['ticket'];      //抓到所有數量
        $saveprice = $_POST['price'];     //抓到所有麵包價格
        $savecut = $_POST['cut'];         //抓到所有要不要切
        $savetotal = $_POST['tt'];        //抓到總金額
        $count = 0;         //計算所訂購麵包數量
        if($savetotal == 0 ){
            return back()->with('notice','請點選數量！');
        }else{
            for($i = 0 ; $i < count($savePName) ; $i++){     //將所訂購麵包另存別的陣列
                if($savenum[$i] > 0){     //如果數量大於0，就另存
                    $testPName[] = $savePName[$i];     //把所選的麵包存到testPName陣列
                    $testnum[] = $savenum[$i];         //把所選麵包數量存到testnum陣列
                    $testcut[] = $savecut[$i];         //把所選麵包切不切存到testnum陣列
                    $count += $savenum[$i];            //計算麵包總數量
                }
            }
    
            $datamember = members::where('email' , $test_member)->first();
            return view('be_buy.index2' , ['datamember' => $datamember , 
                                            'savetotal' => $savetotal ,
                                            'testPName' => $testPName ,
                                            'testnum' => $testnum ,
                                            'testcut' => $testcut ,
                                            'count' => $count ,
                                            'takedate' => $takedate]);
        }
        
    }

    public function store(Request $request)    //前台我要購買訂單送出處理部分
    {
        $email = $_POST['cemail'];
        $takedate = $_POST['takedate']; 
        $savePName = $_POST['testPName']; 
        $savenum = $_POST['testnum']; 
        $savecut = $_POST['testcut'];
        $savetotal = $_POST['savetotal'];
        $remark = $_POST['remark'];  

        $saveorder = new order;    //此為訂單儲存
        $saveorder->email = $email;
        $saveorder->tekedate_time = $takedate; 
        $saveorder->total = $savetotal;
        $saveorder->save();

        $order_id = order::where('email' , $email)->where('tekedate_time' , $takedate)->pluck('order_id');
        $order_id = str_replace('[','',$order_id);
        $order_id = str_replace(']','',$order_id);
        for($j= 0 ; $j < count($savePName) ; $j++ ){   //此為詳細訂單儲存
            if($savenum[$j] > 0) {
                $savedetail_order = new detail_order;
                $savedetail_order->PName = $savePName[$j];
                $savedetail_order->num = $savenum[$j];
                $savedetail_order->cut = $savecut[$j];
                $savedetail_order->remark = $remark;
                $savedetail_order->order_id = $order_id;
                $savedetail_order->save();
            }
        }
        
        return view('be_buy.finish' , ['takedate' => $takedate , 'order_id' => $order_id] );
    }

}
