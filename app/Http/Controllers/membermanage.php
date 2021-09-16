<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\order;

class membermanage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = members::all();
        $savecnt = array();
        foreach($members as $member){
            $count = order::where('email' , $member->email)->count();
            $savecnt[] = $count;
            //echo var_dump($count);
            
        }
        //for( $i=0 ; $i<count($savecnt);$i++){
            //print $savecnt[$i];
        //}
        //$cnt = order::count();
        return view('membermanage.list' , ['members' => $members , 'savecnt' => $savecnt ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('membermanage.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function membermanage(Request $request)
    {
        //
        return back()->with('notice','修改成功!');
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
