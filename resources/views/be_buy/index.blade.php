@extends('layouts.login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|我要購買</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <h2><i class="fas fa-shopping-cart"></i>&nbsp;我要購買</h2><hr>
  <h3 class="text-start">注意事項：</h3>

  <div class="row col-md-12 text-start">
    <p>&nbsp;&nbsp;本次取貨日期：{{ $takedate }}</p>
  </div>
  <form action="{{ route('be_buy.index2')}}" method="GET">
    @csrf
    <h4 class="text-start">本次訂購星期：{{ $week  }}</h4>
    @php
      $cnt = 0;
    @endphp

    @foreach($Ptype as $product)
    @php
      $cnt += 1;
      $cntt=strval($cnt);
    @endphp
    <div class="card mb-3" style="max-width: 1000px;">
      <div class="row g-0">
        <div class="col-md-3">
          @if($product->pic)
            <img src="{{ asset('product_images/' . $product->pic )}}" alt="{{ $product->pic }}" style="height: 150px;width: 145px;">
            @else
            <img src="{{ asset('bread_test.jpg')}}" alt="測試麵包圖" style="height: 150px;width: 145px;">
          @endif
        </div>
          <div class="card-body row col-md-9" id="mat" >
            <h5 class="card-title col-md-4">{{ $product->PName }}</h5>
            <div class="card-text col-md-4">
              <input style="width:30px;" type='button' value='-' class='qtyminus' field='ticket{{$cntt}}' />
              <input type='text' readonly="readonly" name='ticket' value="0" class='qty' id='ticket{{$cntt}}' style="width: 50px;"/>
              <input style="width:30px;" type='button' value='+' class='qtyplus' field='ticket{{$cntt}}' />
            </div>
            <div class="card-text col-md-2"><strong>{{ $product->price }}</strong>元</div>
            <div class="card-text col-md-2"><input type="checkbox"  id="checkboxNoLabel" style="height: 15px;width:15px">切</div>
          </div>
      </div>
    </div>
    @endforeach

    <div class="row text-end" >
      <div class="col-md-10 align-self-center">總金額：<input class="tot"/>元</div>
      <div class="col-md-2" id="msform" style="margin: 0px"><button type="submit" class="next action-button" style="outline: none;">下一步</button></div>
    </div>


  </form>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>      
      $(function() {
      // This button will increment the value.
      $('.qtyplus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[id=' + fieldName + ']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
          // Increment
          $('input[id=' + fieldName + ']').val(currentVal + 1);
        } else {
          // Otherwise put a 0 there
          $('input[id=' + fieldName + ']').val(0);
        }
      });
      // This button will decrement the value till 0
      $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[id=' + fieldName + ']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
          // Decrement one
          $('input[id=' + fieldName + ']').val(currentVal - 1);
        } else {
          // Otherwise put a 0 there
          $('input[id=' + fieldName + ']').val(0);
        }
      });

      $(".tot"){
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[id=' + fieldName + ']').val());
      }
    });
  </script>

@endsection