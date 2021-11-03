@extends('layouts.login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|完成訂單</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <h2>訂購成功</h2><hr><br>
  <div class="row text-start justify-content-center">
    <P class="col-md-7">感謝您訂購瑪利MAMA手工麵包！</P>
    <P class="col-md-7">您的訂單已成立，<br>訂單編號：{{ $order_id }}</P>
    <P class="col-md-7">訂單詳細資訊請點擊下面按鈕至會員專區的訂單查詢</P>
  </div><br>
  <div style="margin: 0px"  id="msform"><button type="submit" class="next action-button btn pull-center" onclick="location.href='{{route('member.index')}}'" style="outline: none;">訂單查看</button></div>




</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection