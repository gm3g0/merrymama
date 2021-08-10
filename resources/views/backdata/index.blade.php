@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|</title>
@endsection

@section('javascript')
<script src="https://cdn.highcharts.com.cn/highcharts/highcharts.js"></script>
        <script src="https://cdn.highcharts.com.cn/highcharts/modules/exporting.js"></script>
        <script src="https://img.hcharts.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script> 
<script src="/js/highcharts.js" type="text/javascript"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js" type="text/javascript"></script> 
<script src="/js/adapters/mootools-adapter.js" type="text/javascript"></script> 
<script src="/js/highcharts.js" type="text/javascript"></script> 
@endsection
@section('name')
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
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
    
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '2014 年各浏览器市场占有比例'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}%</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: [
         ['Firefox',   45.0],
         ['IE',       26.8],
         {
            name: 'Chrome',
            y: 12.8,
            sliced: true,
            selected: true
         },
         ['Safari',    8.5],
         ['Opera',     6.2],
         ['Others',   0.7]
      ]
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container').highcharts(json);  
});
</script>
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection