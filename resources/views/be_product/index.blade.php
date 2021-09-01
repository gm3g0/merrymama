@extends('layouts.guest')
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
    <div class="col-lg-2 js-scrollspy-nav nav">
      <div class="col-12">Day &nbsp;<i class="fas fa-heart"></i><hr style="height:1px;border:none;border-top:1px dashed #0066CC;"/></div>
      <a href="#one"   class="col-12" >星期一</a>
      <a href="#two"   class="col-12" >星期二</a>
      <a href="#three" class="col-12" >星期三</a>
      <a href="#four"  class="col-12" >星期四</a>
      <a href="#five"  class="col-12" >星期五</a>
    </div>
    <div class="js-scrollspy-content content" id="msform">
      <h4 id="one" class="text-start" style="margin-left: 5px">星期一</h4>
      <div class="row row-cols-1 row-cols-md-2 g-4" style="margin:0px">
        <div class="col">
          <div class="card">
            <img src="bread_test.jpg" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a onclick="location.href='{{route('be_product.index2')}}'" class="next action-button">詳細介紹</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="bread_test.jpg" class="card-img-top align-self-center" alt="測試麵包圖" style="height: 150px;width: 145px;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a onclick="location.href='{{route('be_product.index2')}}'" class="next action-button">詳細介紹</a>
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

      <h4 id="two" class="text-start" style="margin-left: 5px">星期二</h4>
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
      
      <h4 id="three" class="text-start" style="margin-left: 5px">星期三</h4>


      <h4 id="four" class="text-start" style="margin-left: 5px">星期四</h4>
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
      </div><br>

      <h4 id="five" class="text-start" style="margin-left: 5px">星期五</h4>
      

    </div>
  </div>
  
  
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>			
    var spy = new ScrollSpy('#js-scrollspy', {
				nav: '.js-scrollspy-nav  > a',
				className: 'is-inview',
				callback: function () {
			}
		});
</script>
  
@endsection