@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|我要購買</title>
@endsection
@section('name')
<style>
  #chc2,#chc1, #chc4,#chc5, #chc6,#chc7,#chc8,#chc9 {
    color: black;
} 
#chc3 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
<h2>我要購買</h2>
@if(session()->has('notice'))
  <div class="alert alert-warning">
    {{ session()->get('notice') }}
  </div>
@endif
<form action="{{ route('backbuy.backbuy') }}" id="msform" method="POST">
  @csrf
  <div class="container">
    <div class="row align-items-center">
      <div class="col-auto">
        <h4 class="text-start">本次訂購：</h4>
      </div>
      <div class="col-md-3">
        <select name="buyweek" class="form-select" aria-label="Default select example" id="buyweek">
          <option selected></option>
          <option value="星期一">星期一</option>
          <option value="星期二">星期二</option>
          <option value="星期三">星期三</option>
          <option value="星期四">星期四</option>
          <option value="星期五">星期五</option>
        </select> 
      </div>
      <div class="col-md-3 text-start">
          取貨日期：<input type="date" name="date" value="" id="dateto2"   min="">
      </div>
      <div class="col-md-2"  style="margin: 0px">
        <button type="submit" class="next action-buttonb" style="outline: none;">確定</button>
      </div>
    </div>
  </div>
</form>

  <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none;" id="week1">
  @foreach($Mon as $product)
    @if($product->status == 1)
    <div class="col">
      <div class="card">
      @if($product->pic)
        <img src="{{ asset('storage/' . $product->pic )}}" class="card-img-top align-self-center" alt="{{ $product->pic }}" style="height: 150px;width: 145px;">
      @else
        <img src="{{ asset('bread_test.jpg')}}" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
      @endif
        <div class="card-body">
          <h5 class="card-title">{{ $product->PName }}</h5>
          <p class="card-text">{{ $product->introduction }}</p>
          
        </div>
      </div>
    </div>
    @endif
  @endforeach
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none;" id="week2">
  @foreach($Tue as $product)
    @if($product->status == 1)
    <div class="col">
      <div class="card">
      @if($product->pic)
        <img src="{{ asset('storage/' . $product->pic )}}" class="card-img-top align-self-center" alt="{{ $product->pic }}" style="height: 150px;width: 145px;">
      @else
        <img src="{{ asset('bread_test.jpg')}}" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
      @endif
        <div class="card-body">
          <h5 class="card-title">{{ $product->PName }}</h5>
          <p class="card-text">{{ $product->introduction }}</p>
          
        </div>
      </div>
    </div>
    @endif
  @endforeach
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none;" id="week3">
  @foreach($Wed as $product)
    @if($product->status == 1)
    <div class="col">
      <div class="card">
      @if($product->pic)
        <img src="{{ asset('storage/' . $product->pic )}}" class="card-img-top align-self-center" alt="{{ $product->pic }}" style="height: 150px;width: 145px;">
      @else
        <img src="{{ asset('bread_test.jpg')}}" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
      @endif
        <div class="card-body">
          <h5 class="card-title">{{ $product->PName }}</h5>
          <p class="card-text">{{ $product->introduction }}</p>
          
        </div>
      </div>
    </div>
    @endif
  @endforeach
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none;"id="week4">
  @foreach($Thu as $product)
    @if($product->status == 1)
    <div class="col">
      <div class="card">
      @if($product->pic)
        <img src="{{ asset('storage/' . $product->pic )}}" class="card-img-top align-self-center" alt="{{ $product->pic }}" style="height: 150px;width: 145px;">
      @else
        <img src="{{ asset('bread_test.jpg')}}" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
      @endif
        <div class="card-body">
          <h5 class="card-title">{{ $product->PName }}</h5>
          <p class="card-text">{{ $product->introduction }}</p>
          
        </div>
      </div>
    </div>
    @endif
  @endforeach
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none;"id="week5">
  @foreach($Fri as $product)
    @if($product->status == 1)
    <div class="col">
      <div class="card">
      @if($product->pic)
        <img src="{{ asset('storage/' . $product->pic )}}" class="card-img-top align-self-center" alt="{{ $product->pic }}" style="height: 150px;width: 145px;">
      @else
        <img src="{{ asset('bread_test.jpg')}}" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
      @endif
        <div class="card-body">
          <h5 class="card-title">{{ $product->PName }}</h5>
          <p class="card-text">{{ $product->introduction }}</p>
          
        </div>
      </div>
    </div>
    @endif
  @endforeach
  </div>

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
    <script>
      $(function() {
  $("#buyweek").change(function() {
    switch ($(this).val()) {
      case "星期一":
        $("#week1").show();
        $("#week2").hide();
        $("#week3").hide();
        $("#week4").hide();
        $("#week5").hide();
        break;
      case "星期二":
        $("#week1").hide();
        $("#week2").show();
        $("#week3").hide();
        $("#week4").hide();
        $("#week5").hide();
        break;
      case "星期三":
        $("#week1").hide();
        $("#week2").hide();
        $("#week3").show();
        $("#week4").hide();
        $("#week5").hide();
      break;
      case "星期四":
        $("#week1").hide();
        $("#week2").hide();
        $("#week3").hide();
        $("#week4").show();
        $("#week5").hide();
      break;
      case "星期五":
        $("#week1").hide();
        $("#week2").hide();
        $("#week3").hide();
        $("#week4").hide();
        $("#week5").show();
      break;
      default:
        return;
    }
  });
});

    </script>
@endsection