<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\takedate;

class ordermanage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choosetime = takedate::max('choose_time');  //取得最新設定時間
        $takedates = takedate::where('choose_time',$choosetime)->pluck('tekedate_time'); //取得當次取貨日期
        $takedate = str_replace('["','',$takedates); //str_replace取代字串中a字元為b('a','b','字串') 在此為刪除不必要符號
        $takedate = str_replace('"]','',$takedate);

        return view('ordermanage.order' , [ 'takedate' => $takedate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ordermanage.history');
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
