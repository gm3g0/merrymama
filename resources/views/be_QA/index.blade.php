
@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|常見Q&A</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <h2>常見 Q & A </h2><hr><br>
  @php
    $cnt = 0;
  @endphp
  @foreach($QAs as $QA)
  @php
    $cnt += 1;
    $cntt=strval($cnt);
  @endphp
  <div class="accordion" id="accordionExample"><!--手風琴-->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button  collapsed" type="button" data-toggle="collapse".$cntt data-target="#collapseOne{{$cntt}}" aria-expanded="false" aria-controls="collapseOne" >
          <div class="row">
            <div class="fs" style="font-size: 16px">{{ $QA->question }}</div>
          </div>
        </button>
      </h2>

        <div id="collapseOne{{$cntt}}".$cntt class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
         <div class="container">
          <div class="row text-start">
            <h5 class="fs"></h5></div> <br>
          <div class="row col-md-12 text-start align-self-center" style="margin: 0px">
            &nbsp;&nbsp;{{ $QA->answer }}
          </div><br>
        </div>
         
          </div>
        </div>
    </div>
  </div>
  @endforeach
  
</div></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection