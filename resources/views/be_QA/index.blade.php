
@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|常見Q&A</title>
@endsection

@section('main')
<div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3">
  <h2>常見Q&A</h2><br>
  <div class="accordion" id="accordionExample"><!--手風琴-->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
          <div class="row">
            <div class="fs" style="font-size: 16px">Q1：</div>
          </div>
        </button>
      </h2>

        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
         <div class="container">
          <div class="row">
            <h5 class="fs">A1：</h5></div> <br>
          <div class="row offset-md-1">
            <div class="col-md-6">不知道不知道不知道不知道不知道不知道不知道</div>
          </div><br>
        </div>
         
          </div>
        </div>
    </div>
  </div>
  
</div></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection