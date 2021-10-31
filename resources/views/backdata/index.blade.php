@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|數據分析</title>
@endsection

@section('name')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<link rel="stylesheet" href="https://longbill.github.io/jquery-date-range-picker/dist/daterangepicker.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="https://longbill.github.io/jquery-date-range-picker/dist/jquery.daterangepicker.min.js"></script>
<style>
  #chc2,#chc3, #chc4,#chc5, #chc6,#chc7,#chc8,#chc1 {
    color: black;
} 
#chc9 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
<h2>數據統計</h2>
<form action="{{ route('data.backdata') }}" method="POST" id="msform">
  @csrf
  
<div class="row align-items-center text-left ">
  @if($date != '')
    <div class="col-md-4">
    <h4>{{ $date }}</h4></div>
  @endif
  <div class="col-md-1 text-right">
    <span id="i" class="fa fa-calendar fa-fw fa-lg"> </span></div>
  <div class="col-md-4">
    <input class="form-control" id='date_input' name="date" placeholder='查詢其他日期'  style="font-size: 22px;width:100%"/>
  </div>
  <div class="col-md-2">
    <button type="submit" class="next action-buttonb" style="outline: none;">搜尋</button>
  </div>
</div>
<div>
  @php
    $cnt = 0;
  @endphp
  @foreach($test as $te)
  @php
    $cnt += 1;
    $cntt=strval($cnt);
  @endphp
  {{-- <div id="nn12{{$cntt}}">{{ $te }}</div> --}}
  <div id="nn12{{$cntt}}">{{ $te }}</div>
  <div id="nn11">fhkh</div>
  @endforeach
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card h-100" >
      <div class="card-body">
        <h5 class="card-title">總訂單金額</h5>
        <strong>0</strong>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" >
      <div class="card-body">
        <h5 class="card-title">總訂單筆數</h5>
        <strong>0</strong>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" >
      <div class="card-body">
        <div id="container1"></div>
      </div>
    </div>
  </div>

</div>
</form>
<script>
  $('#date_input').dateRangePicker({
singleMonth: true,
showShortcuts: false,
showTopbar: false,
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
  $(function() {
  
    $('input[name="datefilter"]').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });
  
    $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });
  
    $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
  
  });
  </script>

<script src="http://cdn.highcharts.com.cn/highcharts/highcharts.js"></script>

<script>
  for(var i=0 ;i<4 ; i++){
    var a=document.getElementById("nn12"+i).innerHTML;
  }
  
  var b=document.getElementById("nn11").innerHTML;
  // Create the chart
  Highcharts.chart('container1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'World\'s largest cities per 2017'
    },
    
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    credits: {
        enabled:false
    },
    series: [{
        name: 'Population',
        data: [
          // for(let i=0 ; i<5 ;i++){
          //   [ i, i+2]
          // }
            [b, parseInt(a)],
            ['Karachi', 14.9],
            ['Shenzhen', 13.7],
            ['Guangzhou', 13.1],
            ['Istanbul', 12.7],
            ['Mumbai', 12.4],
            ['Moscow', 12.2],
            ['São Paulo', 12.0],
            ['Delhi', 11.7],
            ['Kinshasa', 11.5],
            ['Tianjin', 11.2],
            ['Lahore', 11.1],
            ['Jakarta', 10.6],
            ['Dongguan', 10.6],
            ['Lagos', 10.6],
            ['Bengaluru', 10.3],
            ['Seoul', 9.8],
            ['Foshan', 9.3],
            ['Tokyo', 9.3]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection