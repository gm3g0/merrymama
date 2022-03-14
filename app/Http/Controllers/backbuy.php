<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\takedate;
use App\Models\products;

class backbuy extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  //後台我要購買設定首頁 
    {
        $account = session('account');
        $Mon = products::where('type','like','%星期一%')->get();
        $Tue = products::where('type','like','%星期二%')->get();
        $Wed = products::where('type','like','%星期三%')->get();
        $Thu = products::where('type','like','%星期四%')->get();
        $Fri = products::where('type','like','%星期五%')->get();
        return view('backbuy.index' , [
            'Mon' => $Mon,
            'Tue' => $Tue,
            'Wed' => $Wed,
            'Thu' => $Thu,
            'Fri' => $Fri
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backbuy()
    {
        $account = session('account');
        $week = $_POST["buyweek"];
        $date = $_POST["date"];

        $checkweek = takedate::where('tekedate_time',$date)->get();
        $now = date("Y-m-d H:i:s");

        if($week == '' || $date == ''){
            return back()->with('notice','資訊設定不完整！');
        }elseif ( $checkweek->first()){
            return back()->with('notice','此日期重複設定！');
        }else{
            $takedate = new takedate;
            $takedate->tekedate_time = $date;
            $takedate->week = $week;
            $takedate->choose_time = $now;
            $takedate->save();
            return back()->with('notice','設定成功！');
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
