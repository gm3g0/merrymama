@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|訂單管理_訂單資訊</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc4,#chc1, #chc6,#chc7,#chc8,#chc9 {
    color: black;

} 
#chc5 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
<h2>訂單管理-訂單資訊</h2><br>
<div class="container">
  <div class="row  align-items-center">
    <div class="col-md-5">
      <h4>取貨日期：<strong>{{ $takedate }}</strong></h4>
      
    </div>
    {{-- <div class="col-md-2 text-start ">
      
    </div> --}}
    
    <div class="col-md-5">
      <h4 >目前累計金額：<strong>{{ $count }}</strong> 元</h4>
      
    </div>
    {{-- <div class="col-md-2 text-start">
      
    </div> --}}
    <div class="col-md-2 text-end" id="msform" style="margin-top: 0px;">
      <button class="next action-buttonv" style="outline: none;" value="Excel" onclick="ExportToExcel('xlsx')">Excel</button>
      {{--<input type="button" class="next action-buttonb" style="outline: none;" value="Excel"onclick="window.open('https://docs.google.com/spreadsheets/d/1fJGNve3_rjgjofGVTYF-VKE81-_fmAgF_nMthdbm7ko/edit?usp=sharing')"/>--}}
    </div>
  </div>
</div>

  @php
    $cnt = 0;
  @endphp
<div class="accordion" id="accordionExample"><!--手風琴-->
  @foreach( $orders as $order )
  @php
    $cnt += 1;
    $cntt=strval($cnt);
  @endphp

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button  collapsed" type="button" data-toggle="collapse".$cntt data-target="#collapseOne{{$cntt}}" aria-expanded="false" aria-controls="collapseOne" >
        <div class="row col-12 fs"style="font-size: 16px">
          <div class="col-3">訂單編號：{{ $order->order_id }}</div><div class="col-3">金額：{{ $order->total }}</div><div class="col-6">會員：{{ $order->email }}</div>
          
        </div>
      </button>
    </h2>
      <div id="collapseOne{{$cntt}}".$cntt class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="container">
          @foreach($detail_order as $detail)
            @if( $detail->order_id == $order->order_id )

            <div class="text-start">
              @if($test == 1)
                <b>備註：</b>
                {{ $detail->remark }}
                <?php $test  += 1; ?>
              @endif
            </div><br>
            <div class="row col-md-12 text-start align-self-center" style="margin: 0px;">             
              <br><div class="col-md-6">
                {{ $detail->PName }}
              </div>
              <div class="col-md-2">
                x {{ $detail->num }}
              </div>
              <div class="col-md-4">
                {{ $detail->cut }}
              </div>
              <hr style="margin: 10px">
            </div>
            @endif
            
          @endforeach
          <?php $test  = 1; ?>
          </div>
        </div>
      </div>
  </div>
  @endforeach
</div>
  
<section class="table table-hover">
  <div class="col align-self-center"> <!--時間表-->
    <table cellpadding="0" cellspacing="0" id="table">
      <thead>
        <tr class="tbl-header">
          <th><h6><b> 訂單編號</th>
          <th><h6><b> 金額</th>
          <th><h6><b> 會員</th>
          <th><h6><b> 備註</th>
          <th><h6><b> 麵包品項</th>
          <th><h6><b> 數量</th>
          <th><h6><b> 切或不切</th>
        </tr>
      </thead>
  </div>
  <div class="tbl-content">
      <tbody >
        @php
          $cnt = 0;
        @endphp
          @foreach($orders as $order)
              @php
                $cnt += 1;
                $cntt=strval($cnt);
              @endphp
              <tr>
                <td>
                  {{ $order->order_id }}
                </td>
                <td>{{ $order->total }}</td>  
                <td>{{ $order->email }}</td>
                
                <td>
                  @if($test == 1)
                    <b>備註：</b>
                    {{ $detail->remark }}
                    <?php $test  += 1; ?>
                  @endif
                </td>
            @foreach($detail_order as $detail)
              @if( $detail->order_id == $order->order_id )
                
                <td>{{ $detail->PName }}</td>
                <td>x {{ $detail->num }}</td>
                <td>{{ $detail->cut }}</td>
              </tr>
              @endif
            @endforeach
            @endforeach
            <?php $test  = 1; ?>
      </tbody>
    </table>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
  function ExportToExcel(type, fn, dl) {
      var elt = document.getElementById('table');
      var wb = XLSX.utils.table_to_book(elt, { sheet: "訂單" });
      return dl ?
          XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
          XLSX.writeFile(wb, fn || ('訂單.' + (type || 'xlsx')));
  }

</script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection