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
  <div id="nn12{{$cntt}}">{{ $te }}</div>
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
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <div id="container2"></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <div id="container3"></div>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <div id="container4"></div>
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
  
  function percentToValue(value) {
    var a=document.getElementById("nn12").innerHTML;
    value = value + '';
    const pointIndex = value.indexOf('.');
    if (pointIndex === -1) return (value - 0) / 100;
    const powIndex = value.length - pointIndex - 1;
    return (value.replace('.', '') - 0) / Math.pow(10, powIndex + 2);
  }
   Highcharts.chart('container1', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: '每麵包銷售量比'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  credits: {
        enabled:false
      },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: '銷售比',
    colorByPoint: true,
    data: [{
      name: '11',
      y:  4.48,
      sliced: true,
      selected: true
    }, {
      name: '123' ,
      y: 11.84
    }, {
      name: 'Firefox',
      y: 10.85
    }, {
      name: 'Edge',
      y: 4.67
    }, {
      name: 'Safari',
      y: 4.18
    }, {
      name: 'Sogou Explorer',
      y: 1.64
    }, {
      name: 'Opera',
      y: 1.6
    }, {
      name: 'QQ',
      y: 1.2
    }, {
      name: 'Other',
      y: 2.61
    }]
  }]
});
</script>
<script>
  var a=document.getElementById("nn12").innerHTML;
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
            ['Shanghai', 12.5],
            ['Beijing', 20.8],
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
<script>
Highcharts.chart('container3', {

chart: {
  type: 'column'
},

title: {
  text: 'Total fruit consumption, grouped by gender'
},

xAxis: {
  categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
},

yAxis: {
  allowDecimals: false,
  min: 0,
  title: {
    text: 'Number of fruits'
  }
},

tooltip: {
  formatter: function () {
    return '<b>' + this.x + '</b><br/>' +
      this.series.name + ': ' + this.y + '<br/>' +
      'Total: ' + this.point.stackTotal;
  }
},

plotOptions: {
  column: {
    stacking: 'normal'
  }
},

series: [{
  name: 'John',
  data: [5],
  stack: 'male'
}, {
  name: 'Joe',
  data: [3, 4, 4, 2, 5],
  stack: 'male'
}, {
  name: 'Jane',
  data: [2, 5, 6, 2, 1],
  stack: 'female'
}, {
  name: 'Janet',
  data: [3, 0, 4, 4, 3],
  stack: 'female'
}]
});
</script>
<script>
  Highcharts.chart('container4', {
  chart: {
    zoomType: 'xy'
  },
  title: {
    text: 'Average Monthly Temperature and Rainfall in Tokyo'
  },
  subtitle: {
    text: 'Source: WorldClimate.com'
  },
  xAxis: [{
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
      'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    crosshair: true
  }],
  yAxis: [{ // Primary yAxis
    labels: {
      format: '{value}°C',
      style: {
        color: Highcharts.getOptions().colors[1]
      }
    },
    title: {
      text: 'Temperature',
      style: {
        color: Highcharts.getOptions().colors[1]
      }
    }
  }, { // Secondary yAxis
    title: {
      text: 'Rainfall',
      style: {
        color: Highcharts.getOptions().colors[0]
      }
    },
    labels: {
      format: '{value} mm',
      style: {
        color: Highcharts.getOptions().colors[0]
      }
    },
    opposite: true
  }],
  tooltip: {
    shared: true
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    x: 120,
    verticalAlign: 'top',
    y: 100,
    floating: true,
    backgroundColor:
      Highcharts.defaultOptions.legend.backgroundColor || // theme
      'rgba(255,255,255,0.25)'
  },
  series: [{
    name: 'Rainfall',
    type: 'column',
    yAxis: 1,
    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
    tooltip: {
      valueSuffix: ' mm'
    }

  }, {
    name: 'Temperature',
    type: 'spline',
    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
    tooltip: {
      valueSuffix: '°C'
    }
  }]
});
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection