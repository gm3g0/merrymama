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
</div><br>
{{-- <div>
  @php
    $cnt = 0;
  @endphp
  @foreach($test as $te)
  @php
    $cnt += 1;
    $cntt=strval($cnt);
  @endphp
  {{-- <div id="nn12{{$cntt}}">{{ $te }}</div> 
  <div id="nn12{{$cntt}}">{{ $te }}</div>
  <div id="nn11">fhkh</div>
  @endforeach
</div> --}}
<div style="display: none">
  <span id="name1">名稱1</span>
  <span id="nub1">12</span>
  <span id="name2">名稱2</span>
  <span id="nub2">55</span>
  <span id="name3">名稱3</span>
  <span id="nub3">45</span>
  <span id="name4">名稱4</span>
  <span id="nub4">30</span>
  <span id="name5">名稱5</span>
  <span id="nub5">50</span>
  <span id="name6">名稱6</span>
  <span id="nub6">18</span>
  <span id="name7">名稱7</span>
  <span id="nub7">20</span>
  <span id="name8">名稱8</span>
  <span id="nub8">33</span>

</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card h-100" >
      <div class="card-body">
        <h5 class="card-title">總訂單金額</h5>
        <strong>{{ $total }}</strong>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" >
      <div class="card-body">
        <h5 class="card-title">總訂單筆數</h5>
        <strong>{{ $count }}</strong>
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
  <div class="col">
    <div class="card h-100" >
      <div class="card-body">
        <div id="container2"></div>
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
  // for(var i=0 ;i<4 ; i++){
  //   var a=document.getElementById("nn12"+i).innerHTML;
  // }
  var na1=document.getElementById("name1").innerHTML;
  var nub1=document.getElementById("nub1").innerHTML;
  var na2=document.getElementById("name2").innerHTML;
  var nub2=document.getElementById("nub2").innerHTML;
  var na3=document.getElementById("name3").innerHTML;
  var nub3=document.getElementById("nub3").innerHTML;
  var na4=document.getElementById("name4").innerHTML;
  var nub4=document.getElementById("nub4").innerHTML;
  var na5=document.getElementById("name5").innerHTML;
  var nub5=document.getElementById("nub5").innerHTML;
  var na6=document.getElementById("name6").innerHTML;
  var nub6=document.getElementById("nub6").innerHTML;
  var na7=document.getElementById("name7").innerHTML;
  var nub7=document.getElementById("nub7").innerHTML;
  var na8=document.getElementById("name8").innerHTML;
  var nub8=document.getElementById("nub8").innerHTML;

</script>
<script>
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
    credits : {  
      enabled:false,
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
    series: [{
        name: 'Population',
        data: [
            [na1, parseInt(nub1)],
            [na2, parseInt(nub2)],
            [na3, parseInt(nub3)],
            [na4, parseInt(nub4)]
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
<script>
  // Create the chart
  Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'World\'s largest cities per 2017'
    },
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    credits : {  
      enabled:false,
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
    series: [{
        name: 'Population',
        data: [
            [na5, parseInt(nub5)],
            [na6, parseInt(nub6)],
            [na7, parseInt(nub7)],
            [na8, parseInt(nub8)]
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