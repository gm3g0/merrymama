@extends('layouts.member')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA|會員專區_訂單查看</title>
@endsection
<style>
  .ch1{
    background-color: #6C4438 !important;
    color: #f7f3d1 !important;
    border-radius:5px;
    box-shadow: 6px 6px 16px rgba(0,0,0,0.3)
  }
</style>
@section('main')
  <h2>訂單查看</h2><hr>
  <div class="accordion" id="accordionExample"><!--手風琴-->

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
          <div class="row">
            <div class="fs" style="font-size: 16px">訂單編號：&nbsp;&nbsp;日期：&nbsp;&nbsp;金額：</div>
          </div>
        </button>
      </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="container"><br>
              <div class="row col-md-12 text-start align-self-center" style="margin: 0px">
                &nbsp;&nbsp;不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知不知道不知道不知道不知道不知道不知道
              </div><br>
            </div>
          </div>
        </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
          <div class="row">
            <div class="fs" style="font-size: 16px">訂單編號：&nbsp;&nbsp;日期：&nbsp;&nbsp;金額：</div>
          </div>
        </button>
      </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="container"><br>
              <div class="row col-md-12 text-start align-self-center" style="margin: 0px">
                &nbsp;&nbsp;不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知不知道不知道不知道不知道不知道不知道
              </div><br>
            </div>
          </div>
        </div>
    </div>

  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection