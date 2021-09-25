<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\takedate;
use App\Models\members;
use App\Models\order;
use App\Models\member_order;
use App\Models\detail_order;
use App\Models\takedate_order;

class ordermanage extends Controller
{

    public function index()  //訂單資訊首頁
    {
        $choosetime = takedate::max('choose_time');  //取得最新設定時間
        $takedates = takedate::where('choose_time',$choosetime)->pluck('tekedate_time'); //取得當次取貨日期
        $takedate = str_replace('["','',$takedates); //str_replace取代字串中a字元為b('a','b','字串') 在此為刪除不必要符號
        $takedate = str_replace('"]','',$takedate);

        $orders = order::where('tekedate_time',$takedate)->get();  //取得本次訂單

        $count = 0;  //計算累計金額
        foreach( $orders as $order ){
            $count = $order->total + $count;
        }

        $detail_order = detail_order::all();  //取得詳細訂單

        return view('ordermanage.order' , [ 'takedate' => $takedate ,
                                            'count' => $count , 
                                            'orders' => $orders , 
                                            'detail_order' => $detail_order]);
    }

    public function create()  //歷史訂單首頁
    {
        $takedates = takedate::all();  //取得取貨日期
        foreach( $takedates as $takedate ){
            $checkdate = takedate_order::where('tekedate_time', $takedate->tekedate_time)->first(); //跟takedate做對比，找到日期
            //echo $takedate->tekedate_time . " ";
            $checktotal = order::where('tekedate_time', $takedate->tekedate_time)->sum('total');
            $countorder = order::where('tekedate_time', $takedate->tekedate_time)->count();
            if ($checkdate == ''){ //如果此日期不在takedate_order資料表裡面，則加入此資料
                $flight = new takedate_order;
                $flight->tekedate_time = $takedate->tekedate_time;
                $flight->totle = $checktotal;
                $flight->order_count = $countorder;
                $flight->save();
            }else{    //如果takedate_order已有此日期資料，則抓那筆資料更新
                $flight =  takedate_order::where('tekedate_time', $takedate->tekedate_time)->first();
                $flight->totle = $checktotal;
                $flight->order_count = $countorder;
                $flight->save();
            }
        }
        $takedate_orders = takedate_order::all();

        $orders = order::all();        //取得訂單資訊
        $detail_order = detail_order::all();  //取得詳細訂單
        return view('ordermanage.history' , [ 'takedates' => $takedates ,
                                                'takedate_orders' => $takedate_orders ,
                                                'orders' => $orders , 
                                                'detail_order' => $detail_order]);
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
