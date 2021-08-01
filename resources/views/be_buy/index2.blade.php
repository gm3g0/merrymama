@extends('layouts.login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|填寫資料</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <h2>填寫資料</h2><hr><br>
  <form action="{{ route('be_buy.finish')}}" method="GET" id="msform">
  <div class="container" style="padding-left: 50px;">
    <div class="row col-md-12 text-start justify-content-center">
      <div class="col-md-3"> 
          姓名：<input type="text" name="cname" value=""></div>
      <div class="col-md-3">
          電話：<input type="tel" name="cphone" value=""></div>
      <div class="col-md-3">
          E-mail：<input type="email" name="cemail" value=""></div>
      <div class="col-md-7">
          總數量：</div>
      <div class="col-md-7">
          明細：</div>
      <div class="col-md-7">&nbsp;
        &nbsp;&nbsp;瑪利媽媽經典麵包
      </div>
      <div class="col-md-7">
        總金額：<strong>1111</strong>元</div>
      </div>
        <br>
    <div class="row col-md-12 justify-content-between">
      <input type="button" class="previous action-button-previous col-md-4 " style="outline: none;margin: 0px" id='back' value='上一步'>
      <button type="submit" class="next action-button btn pull-right col-md-4 " style="outline: none;margin: 0px">訂購</button>
    </div>

    </div>


</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>
    document.getElementById('back').onclick = function () {
        window.history.back();
    }
</script>

@endsection