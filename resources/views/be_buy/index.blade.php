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
  @if(session()->has('notice'))
        <div class="alert alert-warning">
            {{ session()->get('notice') }}
        </div>
  @endif
  <h3 class="text-start">注意事項：</h3>
  <div class="row col-md-12 text-start">
    <ol style="padding-left: 5%">
      <li>每次預購需達外送標準金額，若未達金額會於預購結單日的隔天，通知您取消此次訂購服務。
      <li>因本預購為自發服務性，若有服務不周先行致歉。
      <li>麵包需要協助「分裝袋」、「統一編號」，請至備註欄進行說明。
      <li>若訂購有任何疑慮，歡迎詢問訂購人員，加入LINE官方帳號「@667rltsg」
      <li>謝謝您的訂購，每一次的訂購都實質協助到「瑪利MAMA · 手作麵包坊」！
      </ol>
  </div>
  <form action="{{ route('be_buy.index2')}}" method="POST">
    @csrf
    <h4 class="text-start">本次訂購星期：{{ $week  }}</h4>
    <h4 class="text-start">本次取貨日期：{{ $takedate }}</h4>
    <input type="text" name="takedate" value="{{ $takedate }}" style="display:none"/>
    @php
      $cnt = 0;
    @endphp

    @foreach($Ptype as $product)
    @if($product->status == 1)
    @php
      $cnt += 1;
      $cntt=strval($cnt);
    @endphp
    <div class="card mb-3" style="max-width: 1000px;">
      <div class="row g-0">
        <div class="col-md-3">
          @if($product->pic)
            <img src="{{ asset('storage/' . $product->pic )}}" alt="{{ $product->pic }}" style="height: 150px;width: 145px;">
            @else
            <img src="{{ asset('bread_test.jpg')}}" alt="測試麵包圖" style="height: 150px;width: 145px;">
          @endif
        </div>
          <div class="card-body row col-md-9" id="mat" >
            <h5 class="card-title col-md-4">{{ $product->PName }}</h5>
            <input type="text" name="PName[]" value="{{ $product->PName }}" style="display:none"/>
            <div class="card-text col-md-4">
              <input style="width:30px;" type='button' value='-' class='qtyminus' field='ticket{{$cntt}}' />
              <input type='text' readonly="readonly" name='ticket[]' value="0" class='qty' id='ticket{{$cntt}}' style="width: 50px;"/>
              <input style="width:30px;" type='button' value='+' class='qtyplus' field='ticket{{$cntt}}' />
            </div>
            <div class="card-text col-md-2"><span class="price"><strong>{{ $product->price }}</strong></span>元</div>
            <input type="text" name="price[]" value="{{ $product->price }}" style="display:none"/>
            {{-- <div class="card-text col-md-2"><input type="checkbox" value="1" name="cut[]"  id="checkboxNoLabel" style="height: 15px;width:15px">切</div> --}}
            <div class="card-text col-md-2">
            <select name="cut[]" class="form-select" aria-label="Default select example" id="cut">
              <option  value="切">切</option>
              <option selected value="不切">不切</option>
            </select> </div>
          </div>
      </div>
    </div>
    @endif
    @endforeach

    <div class="row text-end" >
      <div class="col-md-10 align-self-center">總金額：<label name="total" id="total"></label>元</div>
      <input type="hidden" id="tt" name="tt"/>
      <div class="col-md-2" id="msform" style="margin: 0px"><button type="submit" class="next action-button click" style="outline: none;" >下一步</button></div>
    </div>


  </form>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>      
    $(function(){ 
          $(".qtyplus").click(function(){ 
            var t=$(this).parent().find('input[name*=ticket]'); 
            t.val(parseInt(t.val())+1) 
            setTotal(); 
          }) 
          $(".qtyminus").click(function(){ 
            var t=$(this).parent().find('input[name*=ticket]'); 
            t.val(parseInt(t.val())-1) 
            if(parseInt(t.val())<0){ 
              t.val(0); 
            } 
            setTotal(); 
          }) 
          function setTotal(){ 
            var s=0; 
            $(".card ").each(function(){ 
              s+=parseInt($(this).find('input[name*=ticket]').val())
           *parseFloat($(this).find('span[class*=price]').text()); 
            }); 
            $("#total").html(s.toFixed()); 
            var d=0;
        $(".card ").each(function(){
          d+=parseInt($(this).find('input[name*=ticket]').val())
          *parseFloat($(this).find('span[class*=price]').text());
        });
        $("#tt").html(d.toFixed());
          document.getElementsById('tt').value= 'd';
        }
        $(document).ready(function(){
          $(".click").click(function(){
            $("#tt").val($('#total').text())
          })
        })
          
          setTotal();
        }) 
        
  </script>
@endsection