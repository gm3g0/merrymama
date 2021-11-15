@extends(((isset($account)) ? 'layouts.login' : 'layouts.guest' ))
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|商品介紹</title>
@endsection

@section('main')

<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3" id="pa">
  <h2>商品介紹</h2><hr>
  <div id="js-scrollspy">
    <div class="col-lg-2 js-scrollspy-nav nav" id="wn">
      <div class="col-12">Day &nbsp;<i class="fas fa-heart"></i><hr style="height:1px;border:none;border-top:1px dashed #0066CC;"/></div>
      <a class="col-12 a" id="w1" style="color: #fec601">星期一</a>
      <a class="col-12 a" id="w2">星期二</a>
      <a class="col-12 a" id="w3">星期三</a>
      <a class="col-12 a" id="w4">星期四</a>
      <a class="col-12 a" id="w5">星期五</a>
    </div>

    <div class="js-scrollspy-content content" id="msform" >
      
      <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px"id="one">
      <h4 class="text-start" style="margin-left: 5px">星期一</h4>
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
              <a onclick="location.href='{{ route('be_product.show' , $product->PName) }}'" class="next action-button">詳細介紹</a>
            </div>
          </div>
        </div>
        @endif
      @endforeach
      </div>

      
      <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none"id="two">
      <h4 class="text-start" style="margin-left: 5px;">星期二</h4> 
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
              <a onclick="location.href='{{ route('be_product.show' , $product->PName) }}'" class="next action-button">詳細介紹</a>
            </div>
          </div>
        </div>
        @endif
      @endforeach  
      </div>
      
      
      <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none"id="three">
      <h4 class="text-start" style="margin-left: 5px;">星期三</h4>
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
              <a onclick="location.href='{{ route('be_product.show' , $product->PName) }}'" class="next action-button">詳細介紹</a>
            </div>
          </div>
        </div>
        @endif
      @endforeach  
      </div>

      
      <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none"id="four">
      <h4 class="text-start" style="margin-left: 5px;">星期四</h4>
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
              <a onclick="location.href='{{ route('be_product.show' , $product->PName) }}'" class="next action-button">詳細介紹</a>
            </div>
          </div>
        </div>
        @endif
      @endforeach  
      </div>

      
      <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px;display: none"id="five">
      <h4  class="text-start" style="margin-left: 5px;">星期五</h4>
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
              <a onclick="location.href='{{ route('be_product.show' , $product->PName) }}'" class="next action-button">詳細介紹</a>
            </div>
          </div>
        </div>
        @endif
      @endforeach

    </div>
  </div>
  
  </div>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
  $("#w1").click(function(){
    $("#w1").css("color"," #fec601");
    $("#one").show();
    $("#two").hide();
    $("#three").hide();
    $("#four").hide();
    $("#five").hide();
    $("#w2").css("color","black");
    $("#w3").css("color","black");
    $("#w4").css("color","black");
    $("#w5").css("color","black");
  });
  $("#w2").click(function(){
    $("#w2").css("color"," #fec601");
    $("#one").hide();
    $("#two").show();
    $("#three").hide();
    $("#four").hide();
    $("#five").hide();
    $("#w1").css("color","black");
    $("#w3").css("color","black");
    $("#w4").css("color","black");
    $("#w5").css("color","black");
  });
  $('#w3').click(function(){
    $("#w3").css("color"," #fec601");
    $("#one").hide();
    $("#two").hide();
    $("#three").show();
    $("#four").hide();
    $("#five").hide();
    $("#w1").css("color","black");
    $("#w2").css("color","black");
    $("#w4").css("color","black");
    $("#w5").css("color","black");
  });
  $('#w4').click(function(){
    $("#w4").css("color"," #fec601");
    $("#one").hide();
    $("#two").hide();
    $("#three").hide();
    $("#four").show();
    $("#five").hide();
    $("#w2").css("color","black");
    $("#w3").css("color","black");
    $("#w1").css("color","black");
    $("#w5").css("color","black");
  });
  $('#w5').click(function(){
    $("#w5").css("color"," #fec601");
    $("#one").hide();
    $("#two").hide();
    $("#three").hide();
    $("#four").hide();
    $("#five").show();
    $("#w2").css("color","black");
    $("#w3").css("color","black");
    $("#w4").css("color","black");
    $("#w1").css("color","black");
  });
</script>
<script>			
    var spy = new ScrollSpy('#js-scrollspy', {
				nav: '.js-scrollspy-nav  > a',
				className: 'is-inview',
				callback: function () {
			}
		});
</script>
  
@endsection