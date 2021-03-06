@extends(((isset($account)) ? 'layouts.login' : 'layouts.guest' ))
{{-- @extends('layouts.guest') --}}
@section('css')
<link rel="stylesheet" href="{{ asset('css/all.css')}}" />
@endsection

@section('title')
<title>瑪利MAMA|登入</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-6 col-lg-4  text-center p-0 mt-5 mb-3">
  @if(session()->has('notice'))
  <div class="alert alert-warning">
    {{ session()->get('notice') }}
  </div>
  @endif
  <form id="msform" method="POST">
    @csrf
    <fieldset style="background: transparent;">
      <div class="form-card ">
        <h2 class="fs-title">登入</h2><br>
       
        <div class="container">
          <div class="row offset-md-1">
            <div class="col-10">
              E - mail（帳號）：<input type="text" name="macount"><br>
              密碼：<input type="password" name="mpw">
            </div>
          </div>
          <div class="col-10" style="text-align: center;">
            還不是會員嗎？ <a style="cursor: pointer; text-decoration:underline;color:#FEC601;" onclick="location.href='{{route('singup.index')}}'">點此註冊</a>
          </div>
        </div>
      </div>
      <button class="next action-button" type="submit">登入</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </fieldset>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection