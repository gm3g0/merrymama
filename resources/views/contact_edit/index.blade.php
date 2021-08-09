@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|聯絡資訊</title>
@endsection

@section('main')
  <h2>聯絡資訊</h2>
  <form id="msform" method="POST">
    <div class="container">
      <div class="row justify-content-center">
        <div class="row col-md-8 text-start justify-content-center">
          <div class="col-md-9">門市：<input type="text" name="nstore"></div>
          <div class="col-md-9">電話：<input type="text" name="nstphone"></div>
          <div class="col-md-9">地址：<input type="text" name="nadd"></div>
          <div class="col-md-9">E-mail：<input type="email" name="nemail"></div>
        </div>
      </div>
      
    </div>
  <button class="next action-buttonb" type="submit">修改</button>
</form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection