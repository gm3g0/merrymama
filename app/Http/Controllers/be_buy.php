<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\takedate;
use App\Models\products;
use App\Models\order;
use App\Models\detail_order;

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

    public function create(Request $request)  //前台我要購買訂單送出處理部分
    {   
        /*$takedate = $_POST['takedate'];
        $savePName = $_POST['PName'];
        $savenum = $_POST['ticket'];
        $saveprice = $_POST['price'];*/
        $savecut = $_POST['cut'];
        /*foreach($savePName as $PName){
            echo $PName . "</br>";
        }
        foreach($saveprice as $price){
            echo $price . "</br>";
        }
        foreach($savenum as $num){
            echo $num . "</br>";
        }
        for($i = 0 ; $i < count($savePName) ; $i++){
            echo $savePName[$i] . '、' . $savenum[$i] . '、' . $saveprice[$i] . "</br>";
        }*/
        foreach($savecut as $cut){
            echo $cut . "</br>";
        }
        //return view('be_buy.index2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        return view('be_buy.finish');
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
