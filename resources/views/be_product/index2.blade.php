@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|各商品介紹</title>
@endsection

@section('main')

<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <div class="row col-md-6 justify-content-between"id="pl">
    <div class="col-md-6">
      <img src="bread_test.jpg"  alt="測試麵包圖" style="height: 250px;width: 245px;">
    </div>
    <br>
    <div class="row col-md-6 text-start align-items-center justify-content-center">
      名稱：<br>
      介紹：<br>
      售價：<br>&nbsp;&nbsp;
    </div>
  </div><br>
  <form id="msform" method="POST" action="{{ route('product')}}">
    @csrf
  <div class="row col-md-6 justify-content-center text-start" id="pl">
    <div class="col-md-12">
      <h4>我要留言</h4>
      <textarea class="col-md-12 wishContent" maxlength="150" Wrap="Virtual" placeholder="最多輸入150字" style="height: 120px;margin-bottom:0px;"></textarea>
      <span class="wordsNum" style="margin-left: 90%">0/150</span>
    </div>
    <button class="next action-button " type="submit">留言</button>
    
    <div class="col-md-12 text-start">
      <h4>留言板</h4>
      <div class="card">
        <div class="card-header">
          使用者名字
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>內容A well-known quote, contained in a blockquote element.</p>
            <footer class="blockquote-footer text-end">時間標記 </footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script>
  //封裝一個限制字數方法
var checkStrLengths = function (str, maxLength) {
    var maxLength = maxLength;
    var result = 0;
    if (str && str.length > maxLength) {
        result = maxLength;
    } else {
        result = str.length;
    }
    return result;
}

//監聽輸入
$(".wishContent").on('input propertychange', function () {

    //獲取輸入內容
    var userDesc = $(this).val();

    //判斷字數
    var len;
    if (userDesc) {
        len = checkStrLengths(userDesc, 150);
    } else {
        len = 0
    }

    //顯示字數
    $(".wordsNum").html(len + '/150');
});
</script>
@endsection