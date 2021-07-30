@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|商品介紹</title>
@endsection

@section('main')
<div id="list-example" class="list-group" style="width: 230px;">
  <a class="list-group-item list-group-item-action" href="#list-item-1">星期一</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">星期二</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">星期三</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">星期四</a>
  <a class="list-group-item list-group-item-action" href="#list-item-5">星期五</a>
</div>
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  
  <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <h4 class="text-start" id="list-item-1">星期一</h4>
    <div class="row row-cols-1 row-cols-md-2 g-4">
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
    </div>
    <h4 class="text-start" id="list-item-2">星期二</h4>
    <p>...</p>
    <h4 class="text-start" id="list-item-3">星期三</h4>
    <p>...</p>
    <h4 class="text-start" id="list-item-4">星期四</h4>
    <p>...</p>
    <h4 class="text-start" id="list-item-5">星期五</h4>
    <p>...</p>
  </div>

</div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection