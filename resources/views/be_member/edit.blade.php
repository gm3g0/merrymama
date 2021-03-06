@extends('layouts.member')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|會員專區_修改資料</title>
@endsection
<style>
    .ch2{
      background-color: #6C4438 !important;
      color: #f7f3d1 !important;
      border-radius:5px;
      box-shadow: 6px 6px 16px rgba(0,0,0,0.3)
    }
  </style>
@section('main')
    <h2>修改資料</h2><hr>
    @if(session()->has('notice'))
        <div class="alert alert-warning">
            {{ session()->get('notice') }}
        </div>
    @endif
    <form id="msform" method="POST" action="{{ route('member')}}">
      @csrf
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-4 text-start ">
                密碼：<input type="password" name="pw" value="{{ $datamember->password }}"><br>
                名稱：<input type="text" name="name" value="{{ $datamember->name }}"><br>
                電話：<input type="tel" name="tel" value="{{ $datamember->tel }}">
              </div>
            </div>
            
          </div>
        <button class="next action-button" type="submit">修改</button>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection