<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

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
        return view('backdata.index' , ['date' => $date , 'total' => $total , 'count' => $count]);
    }
    public function dataset()
    {
        $date = $_POST['date'];
        $total = 0;
        //echo $date;
        //echo var_dump(substr($date,0, 10)) . "</br>";
        //echo var_dump(substr($date, -10)) ;
        $start = substr($date,0, 10);
        $start = date_add( $start, date_interval_create_from_date_string("1 day"));
        
        echo $start;
        /*$end = substr($date, -10);
        $searchs = order::where('tekedate_time' , '>' , $start)->where('tekedate_time' , '<' , $end)->get();
        foreach($searchs as $search){
            $total += $search->total ;
        }
        $count = count($searchs);
        return view('backdata.index', [ 'date' => $date , 'searchs' => $searchs , 'total' => $total , 'count' => $count ]);
    */
    }

}
