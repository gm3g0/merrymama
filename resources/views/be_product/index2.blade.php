@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|各商品介紹</title>
@endsection

@section('main')

<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <div class="row col-md-8 justify-content-between"id="pl"style="margin-left: 150px;">
    <div class="col-md-5">
      <img src="{{ asset('storage/' . $product1->pic )}}"  alt="{{ $product1->pic }}" style="height: 250px;width: 245px;">
    </div>
    <br>
    <div class="row col-md-7 text-start align-items-center justify-content-center">
      名稱：{{ $product1->PName }}<br>
      介紹：<br>&emsp;{{ $product1->introduction }}<br>
      售價：{{ $product1->price }} 元 <br>
    </div>
  </div><br>

  <form id="msform" method="POST" action="{{ route('mesproduct') }}">
    @csrf
  <div class="row col-md-6 justify-content-center text-start" id="pl">
    <div class="col-md-12">
      <h4>我要留言</h4>
      <input type="text" name="PName" value="{{ $product1->PName }}" style="display:none"/>
      <textarea class="col-md-12 wishContent" maxlength="100" Wrap="Virtual" name="content" placeholder="最多輸入100字" style="height: 120px;margin-bottom:0px;"></textarea>
      <span class="wordsNum" style="margin-left: 90%">0/100</span>
    </div>
    <button class="next action-button " type="submit">留言</button>
    @if(session()->has('notice'))
        <div class="alert alert-warning">
            {{ session()->get('notice') }}
        </div>
    @endif
    <div class="col-md-12 text-start">
      <h4>留言板</h4>
      <div class="card">
      @if($comments == '[]')
        <div class="card-header">
          尚未有人留言！
        </div>
      @endif
      @foreach($comments as $comment)
        <div class="card-header">
          {{ $comment->name }}
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $comment->context }}</p>
            <footer class="blockquote-footer text-end">{{ $comment->com_time }}</footer>
          </blockquote>
        </div>
      @endforeach
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