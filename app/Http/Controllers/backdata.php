<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\comments;
use App\Models\detail_order;

class backdata extends Controller
{

    public function index()
    {
        $date ='';
        $total = 0;
        $searchs = order::all();
        foreach($searchs as $search){
            $total += $search->total ;
            //$orders[] = $search->order_id;
        }
        $count = count($searchs);
        $comment_total = comments::count();
        $comment_member = comments::select('email')->distinct()->get();
        $comment_PName = comments::select('PName')->distinct()->get();
        $cnt = detail_order::count();
        $product_member = order::select('email')->distinct()->get();
        
        return view('backdata.index' , ['date' => $date , 
                                        'total' => $total , 
                                        'count' => $count , 
                                        'comment_total' => $comment_total , 
                                        'comment_member' => $comment_member , 
                                        'comment_PName' => $comment_PName ,
                                        'product_member' => $product_member , 
                                        'cnt' => $cnt]);
    }
    public function dataset()
    {
        $date = $_POST['date'];
        $total = 0;
        $orders[] = "";
        //echo $date;
        //echo var_dump(substr($date,0, 10)) . "</br>";
        //echo var_dump(substr($date, -10)) ;
        $cnt = 0;
        $start = substr($date,0, 10);
        $start = date('Y-m-d',strtotime($start)-1*24*60*60);
        $end = substr($date, -10);
        $end = date('Y-m-d',strtotime($end)+1*24*60*60);
        $searchs = order::where('tekedate_time' , '>' , $start)->where('tekedate_time' , '<' , $end)->get();
        foreach($searchs as $search){
            $total += $search->total ;
            $orders[] = $search->order_id;
        }
        $count = count($searchs);

        $comment_total = comments::where('com_time' , '>' , $start)->where('com_time' , '<' , $end)->count();
        $comment_member = comments::select('email')->distinct()->where('com_time' , '>' , $start)->where('com_time' , '<' , $end)->get();
        $comment_PName = comments::select('PName')->distinct()->where('com_time' , '>' , $start)->where('com_time' , '<' , $end)->get();

        $product_totals = detail_order::all();
        foreach($product_totals as $product_total){
            for( $i = 0 ; $i < count($orders) ; $i++){
                if($product_total->order_id == $orders[$i]){
                    $cnt += 1;
                }
            }
        }
        
        $product_member = order::select('email')->distinct()->where('tekedate_time' , '>' , $start)->where('tekedate_time' , '<' , $end)->get();



        return view('backdata.index', [ 'date' => $date , 
                                        'searchs' => $searchs , 
                                        'total' => $total , 
                                        'count' => $count , 
                                        'comment_total' => $comment_total , 
                                        'comment_member' => $comment_member, 
                                        'comment_PName' => $comment_PName , 
                                        'product_member' => $product_member , 
                                        'cnt' => $cnt]);
    
    }

}
