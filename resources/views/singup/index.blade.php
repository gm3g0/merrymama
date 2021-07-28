
@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|註冊</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-6 col-lg-4  text-center p-0 mt-5 mb-3">
    <form id="msform" method="POST">

      <fieldset style="background: transparent;">
        <div class="form-card ">
          <h2 class="fs-title">註冊</h2><br>
          <div class="container">
            <div class="row offset-md-1">
              <div class="col-10">
                E-mail(帳號)：<input type="email" name="macount"><br>
                密碼：<input type="password" name="mpw"><br>
                姓名：<input type="text" name="name"><br>
                電話：<input type="tel" name="phone">
              </div>
            </div>
            <div class="col-10" style="text-align: center;">
              已經是會員嗎?<a onclick="location.href='{{route('login.index')}}'" style="cursor: pointer; text-decoration:underline;color:#FEC601;">點此登入</a>
            </div>
          </div>
        </div>
        <button class="next action-button" type="submit">註冊</button>
      </fieldset>
    </form>
  </div>
  
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection