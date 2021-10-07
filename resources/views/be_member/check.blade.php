@extends('layouts.member')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|會員專區_訂單查看</title>
@endsection
<style>
  .ch1{
    background-color: #6C4438 !important;
    color: #f7f3d1 !important;
    border-radius:5px;
    box-shadow: 6px 6px 16px rgba(0,0,0,0.3)
  }
</style>
@section('main')
  <h2>訂單查看</h2><hr>
  <div class="accordion" id="accordionExample"><!--手風琴-->
  @php
    $cnt = 0;
  @endphp
  @foreach($dataorder as $order)
  @php
    $cnt += 1;
    $cntt=strval($cnt);
  @endphp
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button  collapsed" type="button" data-toggle="collapse" .cntt data-target="#collapseOne{{$cntt}}" aria-expanded="false" aria-controls="collapseOne" >
          <div class="row">
            <div class="fs" style="font-size: 16px">訂單編號：{{ $order->order_id }}&nbsp;&nbsp;日期：{{ $order->tekedate_time }}&nbsp;&nbsp;金額：{{ $order->total }}</div>
          </div>
        </button>
      </h2>
        <div id="collapseOne{{$cntt}}".cntt class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="container">
              @foreach($datadetail_order as $detail_order)
                @if( $detail_order->order_id == $order->order_id )  
                <div class="row col-md-12 text-start align-self-center" style="margin: 0px">
                  
                  <div class="col-md-8">
                    {{ $detail_order->PName }}
                  </div>
                  <div class="col-md-4">
                    x {{ $detail_order->num }}
                  </div>
                  <hr style="margin: 10px;width: 180px">
                </div>
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