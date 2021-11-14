<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\comments;

class backdata extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date ='';
        $total = 0;
        $count = 0;
        $comment_total = 0;
        $comment_member = [];
        $comment_PName = [];
        return view('backdata.index' , ['date' => $date , 'total' => $total , 'count' => $count , 'comment_total' => $comment_total , 'comment_member' => $comment_member , 'comment_PName' => $comment_PName ]);
    }
    public function dataset()
    {
        $date = $_POST['date'];
        $total = 0;
        //echo $date;
        //echo var_dump(substr($date,0, 10)) . "</br>";
        //echo var_dump(substr($date, -10)) ;
        $start = substr($date,0, 10);
        $start = date('Y-m-d',strtotime($start)-1*24*60*60);
        $end = substr($date, -10);
        $end = date('Y-m-d',strtotime($end)+1*24*60*60);
        $searchs = order::where('tekedate_time' , '>' , $start)->where('tekedate_time' , '<' , $end)->get();
        foreach($searchs as $search){
            $total += $search->total ;
        }
        $count = count($searchs);

        $comment_total = comments::where('com_time' , '>' , $start)->where('com_time' , '<' , $end)->count();
        $comment_member = comments::select('email')->distinct()->where('com_time' , '>' , $start)->where('com_time' , '<' , $end)->get();
        $comment_PName = comments::select('PName')->distinct()->where('com_time' , '>' , $start)->where('com_time' , '<' , $end)->get();







        return view('backdata.index', [ 'date' => $date , 'searchs' => $searchs , 'total' => $total , 'count' => $count , 'comment_total' => $comment_total , 'comment_member' => $comment_member, 'comment_PName' => $comment_PName]);
    
    }

}
