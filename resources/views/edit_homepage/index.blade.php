@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|首頁編輯</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc4,#chc5, #chc6,#chc7,#chc8,#chc9 {
    color: black;

} 
#chc1 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
  <h2>首頁編輯</h2>
  <form id="msform" method="POST">
    @csrf
    <div class="container">
      <div class="row justify-content-center">
        <div class="row col-md-8 text-start justify-content-center">
          <h4 class="col-md-12">最新消息：</h4>
          <div class="col-md-9" style="margin-bottom: 20px"><input type="file" class="form-control" name=""/></div>
          <div class="col-md-9" style="margin-bottom: 20px"><input type="file" class="form-control" name=""/></div>
          <div class="col-md-9" style="margin-bottom: 40px"><input type="file" class="form-control" name=""/></div>

          <h4 class="col-md-12">必買推薦：</h4>
          這邊等後端的判斷要用哪一個
        </div>
      </div>
      
    </div><br>
  <button class="next action-buttonb" type="submit">修改</button>
</form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection