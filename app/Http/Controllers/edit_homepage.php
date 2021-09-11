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
        $now = date("Y-m-d H:i:s");
        $cnt = 0 ;
        for($i = 0 ; $i < 3 ; $i++ ){
            if(!empty($_FILES['files']['name'][$i])){
                $cnt = $cnt + 1;
            }
        }
        if($cnt != 0 ){
            $files = $request->file('files');
            if($request->hasFile('files')){
                foreach ($files as $file) {
                    $path = $file->store('public/news_images');
                    $file = [
                        'news_pic'    => $path,
                        'news_time' => $now
                    ];
                $file = news::create($file);
                }
            }
                return back()->with('notice','修改成功!');
        }else{
            return back()->with('notice','未選擇檔案！');
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
