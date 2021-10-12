<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\order;
use App\Models\member_order;
use App\Models\detail_order;

class membermanage extends Controller
{
    public function index()  //會員管理首頁
    {
        
        $orders = order::all();
        foreach($orders as $order){ 
            $checkemail = member_order::where('email', $order->email)->first(); //跟order資料表做對比，找到email
            $countorder = order::where('email', $order->email)->count(); //計算有幾筆
            $counttotal = order::where('email', $order->email)->sum('total'); //計算總金額
            if ($checkemail == ''){ //如果此email不在member_order資料表裡面，則加入此資料
                $flight = new member_order;
                $flight->email = $order->email;
                $flight->count = $countorder;
                $flight->totle = $counttotal;
                $flight->save();
            }else{    //如果member_order已有此email資料，則抓那筆資料更新
                $flight = member_order::where('email', $order->email)->first(); 
                $flight->count = $countorder;
                $flight->totle = $counttotal;
                $flight->save();
            }
        }
        
        $showdata = members::leftjoin('member_orders', 'members.email' , '=' , 'member_orders.email')
                            ->select('members.email','members.name','members.tel','member_orders.count')
                            ->get();
        return view('membermanage.list' , ['showdata' => $showdata ]);
    }

    public function membermanage(Request $request) //會員管理搜尋
    {
        $search = $_POST['search'];
        $showdata = members::leftjoin('member_orders', 'members.email' , '=' , 'member_orders.email')
                            ->select('members.email','members.name','members.tel','member_orders.count')
                            ->where('members.name','like' , "%" . $search . "%" )
                            ->get();
        if($showdata == '[]'){
            return back()->with('notice','查無此會員');
        }else{
            return view('membermanage.list' , ['showdata' => $showdata ]);
        }
    }

    public function create($name) //查看某會員資料
    {
        $member = members::where('name', $name)->first();
        $countorder = order::where('email', $member->email)->count(); //計算有幾筆
        $counttotal = order::where('email', $member->email)->sum('total'); //計算總金額
        $orders = order::leftjoin('detail_orders', 'orders.order_id' , '=' , 'detail_orders.order_id')
                            ->select('detail_orders.PName','detail_orders.num')
                            ->where('orders.email', $member->email )
                            ->get();

        $test = detail_order::all();

        $orders = order::where('email', $member->email)->get();
        return view('membermanage.order' , ['member' => $member ,
                                            'countorder' => $countorder , 
                                            'counttotal' => $counttotal , 
                                            'orders' => $orders ,
                                            'test' => $test ]);
    }

}
