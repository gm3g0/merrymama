@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|我要購買</title>
@endsection

@section('main')
<h2>我要購買</h2><hr>
<form action="" id="msform" method="GET">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-auto">
        <h4 class="text-start">本次訂購：</h4>
      </div>
      <div class="col-md-3">
        <select name="be_apfo" class="form-select" aria-label="Default select example" id="sonSelect">
          <option selected></option>
          <option value="1">星期一</option>
          <option value="2">星期二</option>
          <option value="3">星期三</option>
          <option value="4">星期四</option>
          <option value="5">星期五</option>
        </select> 
      </div>
      <div class="col-md-3 text-start">
          取貨日期：<input type="date" name="" value="" id="dateto2"   min="">
      </div>
      <div class="col-md-2"  style="margin: 0px">
        <button type="submit" class="next action-buttonb" style="outline: none;">確定</button>
      </div>
    </div>
  </div>
  
  <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px">
    <div class="col">
      <div class="card">
        <img src="bread_test.jpg" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="bread_test.jpg" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div><br>


</form>
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
      $(function(){
          //得到當前時間
        var date_now = new Date();
        //得到當前年份
        var year = date_now.getFullYear();
        //得到當前月份
        //注：
        //  1：js中獲取Date中的month時，會比當前月份少一個月，所以這裡需要先加一
        //  2: 判斷當前月份是否小於10，如果小於，那麼就在月份的前面加一個 '0' ， 如果大於，就顯示當前月份
        var month = date_now.getMonth()+1 < 10 ? "0"+(date_now.getMonth()+1) : (date_now.getMonth()+1);
        //得到當前日子（多少號）
        var date = date_now.getDate() < 10 ? "0"+date_now.getDate() : date_now.getDate();
        var nowdate=year+"-"+month+"-"+date;
        // 
        //設置input標籤的max屬性
        $("#dateto2").attr("min",nowdate);});  
    </script>

@endsection