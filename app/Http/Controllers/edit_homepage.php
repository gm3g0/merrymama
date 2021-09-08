<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class edit_homepage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('edit_homepage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_homepage(Request $request)
    {
        $news =  new news;
        
        $path = $request->file('news1')->store('news_images', 'public');
        $now = date("Y-m-d H:i:s"); 
        //$news->save();
        news::insert(
            ['news_pic' => $path,
            'news_time' => $now]
        );
        //if($request->hasFile('news')){
            //if ($request->news->isValid()){

                //$news->news_pic = $new_fileName;
                //$request->file('news')->move($path , $new_fileName);
                //$news->save();
            //}
        //}
        return back()->with('notice','修改成功!');
       
        
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
