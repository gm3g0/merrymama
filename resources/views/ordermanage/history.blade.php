@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|訂單管理_歷史訂單</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc4,#chc5, #chc1,#chc7,#chc8,#chc9 {
    color: black;
} 
#chc6 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
<h2>訂單管理-歷史訂單</h2><br>
  @php
    $cnt = 0;
  @endphp
<div class="accordion" id="accordionExample"><!--手風琴-->
@foreach($takedates as $takedate)
  @php
    $cnt += 1;
    $cntt=strval($cnt);
  @endphp

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOnee">
      <button class="accordion-button  collapsed" type="button" data-toggle="collapse".$cntt data-target="#collapseOnee{{$cntt}}" aria-expanded="false" aria-controls="collapseOnee" >
        <div class="row">
          <div class="fs" style="font-size: 16px">取貨日期：{{ $takedate->tekedate_time }}&nbsp;&nbsp;
          @foreach( $takedate_orders as $takedate_order )
            @if( $takedate->tekedate_time == $takedate_order->tekedate_time )
            總金額：{{ $takedate_order->totle }}
            @endif
          @endforeach</div>
        </div>
      </button>
    </h2>
      <div id="collapseOnee{{$cntt}}".$cntt class="accordion-collapse collapse" aria-labelledby="headingOnee" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        @foreach( $orders as $order )
          @if( $takedate->tekedate_time == $order->tekedate_time )
          <div class="accordion" id="accordionExample"><!--手風琴-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button  collapsed" type="button" data-toggle="collapse".$cntt data-target="#collapseOne{{$cntt}}" aria-expanded="false" aria-controls="collapseOne" >
                  <div class="row">
                    <div class="fs" style="font-size: 16px">訂單編號：{{ $order->order_id }}&nbsp;&nbsp;金額：{{ $order->total }}&nbsp;&nbsp;會員：{{ $order->email }}</div>
                  </div>
                </button>
              </h2>
                <div id="collapseOne{{$cntt}}".$cntt class="accordion-collapse collapse"aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
          </div>
          @endif
        @endforeach
        </div>
      </div>
  </div><br>
@endforeach
</div>
  
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection