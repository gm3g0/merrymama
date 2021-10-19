@extends('layouts.staff2')
@section('css')
<link rel="stylesheet" href="{{ asset('css/all.css')}}" />
@endsection

@section('title')
<title>瑪利MAMA後台|商品管理_商品編輯</title>
@endsection
@section('name')
<style>
  #chc2,
  #chc3,
  #chc4,
  #chc5,
  #chc6,
  #chc1,
  #chc8,
  #chc9 {
    color: black;
  }

  #chc7 {
    color: black;
    background-color: #fdd977;
    border-bottom-width: 3px
  }
</style>
@endsection

@section('main')
<h2>商品修改</h2>

  @if(session()->has('notice'))
        <div class="alert alert-warning">
            {{ session()->get('notice') }}
        </div>
  @endif
<form action="{{ route('productedit')}}" method="GETS" id="msform">
  @csrf
  <div class="container">
    <div class="row justify-content-center">
      <div class="row col-md-12 text-start justify-content-center">
        <div class="col-md-10">名稱：<input type="text" value="{{ $product->PName }}" name=""></div>
        <div class="col-md-10">價格：<input type="text"  value="{{ $product->price }}" name=""></div>
        <div class="col-md-10" style="margin-bottom: 25px;">分類：<br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">星期一</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">星期二</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">星期三</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">星期四</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">星期五</label>
          </div>
        </div>
        <div class="col-md-10" style="margin-bottom: 25px;">圖片：<input type="file" class="form-control" name="pic" /></div>
        <div class="col-md-10">介紹：<textarea name="" style="height: 100px"></textarea></div>
      </div>
    </div>
  </div>
  <button class="next action-buttonb" type="submit">修改</button>
</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection