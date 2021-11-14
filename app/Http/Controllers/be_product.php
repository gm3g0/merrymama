<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\comments;

class be_product extends Controller
{

    public function index()  //商品介紹首頁
    {
        $account = session('account');
        $Mon = products::where('type','like','%星期一%')->get();
        $Tue = products::where('type','like','%星期二%')->get();
        $Wed = products::where('type','like','%星期三%')->get();
        $Thu = products::where('type','like','%星期四%')->get();
        $Fri = products::where('type','like','%星期五%')->get();
        return view('be_product.index' , ['account' => $account ,
            'Mon' => $Mon,
            'Tue' => $Tue,
            'Wed' => $Wed,
            'Thu' => $Thu,
            'Fri' => $Fri
        ]);
        
    }

    public function product(Request $request)   //留言區
    {
        $account = session('account');
        $PName = $_POST['PName'];
        $content = $_POST['content'];
        $now = date("Y-m-d H:i:s"); //存取留言時間 
        //$test_member = "test01@yahoo.com.tw" ;  //測試用，等session、能抓到使用者後，再做更改

        if($account == 'admin@nutc.edu.tw'){
            return back()->with('notice',"此帳戶無法留言！");
        }elseif($content == ""){
            return back()->with('notice',"請輸入留言！");
        }elseif($account == ""){
            return back()->with('notice',"請先登入！");
        }else{
            $savemesg = new comments;
            $savemesg->PName = $PName;
            $savemesg->email = $account ;
            $savemesg->context = $content;
            $savemesg->com_time = $now;
            $savemesg->save();
            return back();
        }
        
    }

    public function show($PName)  //詳細介紹頁面
    {
        $account = session('account');
        $product1 = products::where('PName', $PName )->first();
        $comments = comments::where('PName', $PName )
                            ->join('members','comments.email','=','members.email')
                            ->select('comments.context','comments.com_time','members.name')
                            ->orderBy('comments.com_time','desc')
                            ->get();

        return view('be_product.index2' , ['account' => $account ,'product1' => $product1 , 'comments' => $comments]);
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
