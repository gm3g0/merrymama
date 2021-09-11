@extends(((isset($account)) ? 'layouts.login' : 'layouts.guest' ))
{{-- @extends('layouts.guest')  --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|首頁</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <h2 class="fas fa-bullhorn">&nbsp;最新消息</h2><br>
  {{-- 輪播式 --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button id="bu" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>&nbsp;
      <button id="bu" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>&nbsp;
      <button id="bu" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>&nbsp;
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="色票2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="色票.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="色票2.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button id="myb" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button id="myb" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> {{-- 輪播END --}}
<br><br>
<h2 class="fas fa-crown">&nbsp;必買推薦</h2>
<div class="row justify-content-between">

  <div class="col-md-4">
    <img src="bread_test.jpg" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 200px;width: 205px;"><br>
    1235
  </div>
  <div class="col-md-4">
    <img src="bread_test.jpg" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 200px;width: 205px;"><br>
    135
  </div>
  <div class="col-md-4">
    <img src="bread_test.jpg" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 200px;width: 205px;"><br>
    3216
  </div>
</div>

</div>
  
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection