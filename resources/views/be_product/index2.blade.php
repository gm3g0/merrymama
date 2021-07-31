@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|各商品介紹</title>
@endsection

@section('main')
<h5 class="fas fa-angle-double-left" id="back" style="cursor: pointer;color:#6c4438;">&nbsp;上一頁</h5>
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <div class="row col-md-6 justify-content-center" id="pl">
    <div class="col-md-12">
      <img src="bread_test.jpg"  alt="測試麵包圖" style="height: 250px;width: 245px;">
    </div>
    <br>
    <div class="col-md-10 text-start">
      名稱：<br>
      價格：<br>
      介紹：<br>&nbsp;&nbsp;
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