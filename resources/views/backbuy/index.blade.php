@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|我要購買</title>
@endsection

@section('main')
<h2><i class="fas fa-shopping-cart"></i>&nbsp;我要購買</h2><hr>
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
      <div class="col-md-2"  style="margin: 0px">
        <button type="submit" class="next action-button" style="outline: none;">確定</button>
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


@endsection