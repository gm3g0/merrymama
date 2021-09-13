<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\takedate;
use App\Models\products;

class be_buy extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $takedate = takedate::max('tekedate_time');
        //$week = takedate::where('tekedate_time' , $takedate)->pluck('week');
        //if( $week == '["星期五"]' ){
            //$Mon = products::where('type','like','%星期一%')->get();
            //return view('be_buy.index', ['takedate' => $takedate , 'week' => $week , 'Fri' => $Fri]);
        //}
        return view('be_buy.index', ['takedate' => $takedate , 'week' => $week]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('be_buy.index2');
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
