@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|訂單管理_訂單資訊</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc4,#chc1, #chc6,#chc7,#chc8,#chc9 {
    color: black;

} 
#chc5 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
<h2>訂單管理-訂單資訊</h2><br>
<div class="container">
  <div class="row  align-items-center">
    <div class="col-md-2 text-end">
      <h4>取貨日期：</h4>
    </div>
    <div class="col-md-2 text-start ">
      <strong >{{ $takedate }}</strong>
    </div>
    <div class="col-md-3 text-start ">
      
    </div>
    <div class="col-md-3  text-end ">
      <h4 >目前累計金額：</h4>
    </div>
    <div class="col-md-2 text-start">
      <strong>{{ $count }}</strong> 元
    </div>
  </div>
</div>
  @php
    $cnt = 0;
  @endphp
<div class="accordion" id="accordionExample"><!--手風琴-->
  @foreach( $orders as $order )
  @php
    $cnt += 1;
    $cntt=strval($cnt);
  @endphp

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button  collapsed" type="button" data-toggle="collapse".$cntt data-target="#collapseOne{{$cntt}}" aria-expanded="false" aria-controls="collapseOne" >
        <div class="row">
          <div class="fs" style="font-size: 16px">訂單編號：{{ $order->order_id }}&nbsp;&nbsp;金額：{{ $order->total }}&nbsp;&nbsp;會員：{{ $order->email }}</div>
        </div>
      </button>
    </h2>
      <div id="collapseOne{{$cntt}}".$cntt class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="container"><br>
          @foreach($detail_order as $detail)
            @if( $detail->order_id == $order->order_id )
            <div class="row col-md-12 text-start align-self-center" style="margin: 0px;">
              <div class="col-md-6">
                {{ $detail->PName }}
              </div>
              <div class="col-md-2">
                x {{ $detail->num }}
              </div>
              <div class="col-md-4">
                {{ $detail->cut }}
              </div>
              <hr style="margin: 10px">
            </div><br>
            @endif
          @endforeach
          </div>
        </div>
      </div>
  </div>
  @endforeach
</div>
  
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection