@extends('layouts.login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|填寫資料</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <h2>填寫資料</h2><hr><br>
  <form action="{{ route('be_buy.finish')}}" method="POST" id="msform">
    @csrf
  <div class="container" style="padding-left: 50px;">
    <div class="row col-md-12 text-start justify-content-center">
      <div class="col-md-3"> 
          姓名：<input type="text" name="cname" value="{{ $datamember->name }}"></div>
      <div class="col-md-3">
          電話：<input type="tel" name="cphone" value="{{ $datamember->tel }}"></div>
      <div class="col-md-4">
          E-mail：<input type="email" name="cemail" value="{{ $datamember->email }}"></div>
      <div class="col-md-7">
          本次取貨日期：{{ $takedate }}</div>
      <input type="text" name="takedate" value="{{ $takedate }}" style="display:none"/>
      <div class="col-md-7">
          總數量：{{ $count }} 個</div>
      <div class="col-md-7">
          明細：</div>
      <div class="col-md-7">
        <?php
          echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'; //網頁編碼宣告  
          for($i = 0 ; $i < count($testPName) ; $i++){ 
            echo "<div class='row'>";
            echo "&emsp;<div class='col-md-5'>$testPName[$i] </div>";
            echo "<div class='col-md-2'>x $testnum[$i]</div>";
            echo "<div class='col-md-4'>$testcut[$i]</div>";
            echo "</div>";
          }
        ?>
      </div>
      @foreach($testPName as $PName)
      <input type="text" name="testPName[]" value="{{ $PName }}" style="display:none"/>
      @endforeach
      @foreach($testnum as $num)
      <input type="text" name="testnum[]" value="{{ $num }}" style="display:none"/>
      @endforeach
      @foreach($testcut as $cut)
      <input type="text" name="testcut[]" value="{{ $cut }}" style="display:none"/>
      @endforeach
      <div class="col-md-7"> <br>
        備註：<textarea name="remark" style="height: 80px" Wrap="Virtual" placeholder="例：分裝袋、統一編號..."></textarea></div>
      <div class="col-md-7">
        總金額：<strong>{{ $savetotal }}</strong>元</div>
        <input type="text" name="savetotal" value="{{ $savetotal }}" style="display:none"/>
      </div>
        <br>
    <div class="row col-md-12 justify-content-between">
      <input type="button" class="previous action-button-previous col-md-4 " style="outline: none;margin: 0px" id='back' value='上一步'>
      <button type="submit" class="next action-button btn pull-right col-md-4 " style="outline: none;margin: 0px">訂購</button>
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