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
<form action="{{ route('edit')}}" method="POST" id="msform" enctype="multipart/form-data">
  @csrf
  <div class="container">
    <div class="row justify-content-center">
      <div class="row col-md-12 text-start justify-content-center">
        <div class="col-md-10" style="margin-bottom: 25px">名稱：{{ $product->PName }}</div>
        <input type="text" name="PName" value="{{ $product->PName }}" style="display:none"/>
        <div class="col-md-10">價格：<input type="text"  value="{{ $product->price }}" name="price" style="width: 20%"></div>
        <div class="col-md-10" style="margin-bottom: 25px;">分類：<br>
        
          <div class="form-check form-check-inline">
          @if($week1 == 1)
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="checkbox[]" value="星期一" checked="True">
              <label class="form-check-label" for="inlineCheckbox1">星期一</label>
          @else
              <input class="form-check-input" type="checkbox" name="checkbox[]" id="inlineCheckbox1"   value="星期一">
              <label class="form-check-label" for="inlineCheckbox1">星期一</label>
          @endif
          </div>
        
          <div class="form-check form-check-inline">
          @if($week2 == 1)
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="checkbox[]" value="星期二" checked="True">
              <label class="form-check-label" for="inlineCheckbox2">星期二</label>
          @else
              <input class="form-check-input" type="checkbox" name="checkbox[]" id="inlineCheckbox2" value="星期二">
              <label class="form-check-label" for="inlineCheckbox2">星期二</label>
          @endif
          </div>
        
          <div class="form-check form-check-inline">
          @if($week3 == 1)
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="checkbox[]" value="星期三" checked="True">
              <label class="form-check-label" for="inlineCheckbox1">星期三</label>
          @else
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="checkbox[]" value="星期三">
              <label class="form-check-label" for="inlineCheckbox1">星期三</label>
          @endif
          </div>
      
          <div class="form-check form-check-inline">
          @if($week4 == 1)
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="checkbox[]" value="星期四" checked="True">
              <label class="form-check-label" for="inlineCheckbox2">星期四</label>
          @else
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="checkbox[]" value="星期四">
              <label class="form-check-label" for="inlineCheckbox2">星期四</label>
          @endif
          </div>
        
          <div class="form-check form-check-inline">
          @if($week5 == 1)
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="checkbox[]" value="星期五" checked="True">
              <label class="form-check-label" for="inlineCheckbox2">星期五</label>
          @else
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="checkbox[]" value="星期五">
              <label class="form-check-label" for="inlineCheckbox2">星期五</label>
          @endif
          </div>
          
        </div>
        
        <div class="col-md-10" style="margin-bottom: 25px;">圖片：<input type="file" class="form-control" name="file" /></div>
        <div class="col-md-4">
        <img src="{{ asset('storage/' . $product->pic )}}" class="card-img-top align-self-center" alt="{{ $product->PName }}" style="height: 200px;width: 205px;"></div>
        <div class="col-md-10">介紹：<textarea name="introduction" style="height: 100px">{{ $product->introduction }}</textarea></div>
      </div>
    </div>
  </div>
  <button class="next action-buttonb" type="submit">修改</button>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection