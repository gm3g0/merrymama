<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class be_product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mon = products::where('type','like','%星期一%')->get();
        $Tue = products::where('type','like','%星期二%')->get();
        $Wed = products::where('type','like','%星期三%')->get();
        $Thu = products::where('type','like','%星期四%')->get();
        $Fri = products::where('type','like','%星期五%')->get();
        return view('be_product.index' , [
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
    public function create()
    {
        //
        return view('be_product.index2');
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
