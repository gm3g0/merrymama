<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\news;

class be_homepage extends Controller
{

    public function index(Request $request)
    {
        $email = session('email');
        if($request->session()->has('email')){
            echo "成功";
        }else{
            echo "失敗";
        }
        $news = news::orderBy('news_time','desc')->limit(3)->get();
        
        foreach($news as $new){
            $shownews[] = str_replace('public/','',$new->news_pic);
        }
        return view('be_homepage.index', ['email' => $email , 'shownews' => $shownews]);
    }

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
