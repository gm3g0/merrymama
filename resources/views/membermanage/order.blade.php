@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|會員管理_會員資訊</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc4,#chc5, #chc6,#chc7,#chc1,#chc9 {
    color: black;
} 
#chc8 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
<h2>會員管理</h2>
<form id="msform" method="GET">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-start justify-content-center">
        <div class="col-md-9">名稱： {{ $member->name }}</div>
        <div class="col-md-9">帳號（E - mail）： {{ $member->email }}</div>
        <div class="col-md-9">電話： {{ $member->tel }}</div>
        <div class="col-md-9">生理性別： {{ $member->sex }}</div>
        <div class="col-md-9">生日： {{ $member->birthday }}</div>
      </div>
    </div><br>

  <h5 class="row justify-content-between">
    <div class="col-md-4 text-start">訂購次數：<strong>{{ $countorder }}</strong> 次</div>
    <div class="col-md-4 text-end">累計金額：<strong>{{ $counttotal }}</strong> 元</div>
  </h5>
</div>
<section class="table table-hover">
  <div class="col align-self-center"> <!--時間表-->
    <table cellpadding="0" cellspacing="0" >
      <thead>
        <tr class="tbl-header">
          <th><h6><b> 訂單編號</th>
          <th><h6><b> 金額</th>
          <th><h6><b> 取貨日期</th>
        </tr>
      </thead>
  </div>
  <div class="tbl-content">
      <tbody >
        @php
          $cnt = 0;
        @endphp
          @foreach($orders as $order)
              @php
                $cnt += 1;
                $cntt=strval($cnt);
              @endphp
              <tr>
                <td >
                  <div class="accordion" id="accordionExample" style="width: 120%"><!--手風琴-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button  collapsed" type="button" data-toggle="collapse".$cntt data-target="#collapseOne{{$cntt}}" aria-expanded="false" aria-controls="collapseOne" >
                          <div class="row">
                            <div class="fs" style="font-size: 16px">訂單編號：{{ $order->order_id }}</div>
                          </div>
                        </button>
                      </h2>
                        <div id="collapseOne{{$cntt}}".$cntt class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="row col-md-12 text-start align-self-center" style="margin: 0px;padding:0px">
                              @foreach($test as $te)
                                @if( $te->order_id == $order->order_id )
                                
                                  <div class="col-md-8">
                                      {{ $te->PName }}
                                  </div>
                                  <div class="col-md-4">
                                      x {{ $te->num }}
                                  </div>
                                  <hr style="margin: 10px;width: 180px">
                                @endif
                              @endforeach
                              </div><br>
                          </div>
                        </div>
                    </div>
                  </div>
                </td>
                <td>{{ $order->total }}</td>  
                <td>{{ $order->tekedate_time }}</td>
              </tr>
            @endforeach
      </tbody>
    </table>
  </div>
</section>
</form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection