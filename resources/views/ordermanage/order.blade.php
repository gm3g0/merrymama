@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|訂單管理_訂單資訊</title>
@endsection

@section('main')
<h2>訂單管理-訂單資訊</h2><br>
<div class="container">
  <div class="row  align-items-center">
    <div class="col-md-2 text-end">
      <h4>取貨日期：</h4>
    </div>
    <div class="col-md-2 text-start ">
      <strong >0</strong>
    </div>
    <div class="col-md-3 text-start ">
      
    </div>
    <div class="col-md-3  text-end ">
      <h4 >目前累計金額：</h4>
    </div>
    <div class="col-md-2 text-start">
      <strong>000</strong>元
    </div>
  </div>
</div>

<div class="accordion" id="accordionExample"><!--手風琴-->

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
        <div class="row">
          <div class="fs" style="font-size: 16px">訂單編號：&nbsp;&nbsp;金額：&nbsp;&nbsp;會員：</div>
        </div>
      </button>
    </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="container"><br>
            <div class="row col-md-12 text-start align-self-center" style="margin: 0px;">
              <div class="col-md-6">
                不知道不知道不知道不知道
              </div>
              <div class="col-md-2">
                Ｘ0
              </div>
              <div class="col-md-4">
                切
              </div><hr style="margin: 10px">
              <div class="col-md-6">
                不知道不知道
              </div>
              <div class="col-md-2">
                Ｘ0
              </div>
              <div class="col-md-4">
                不切
              </div><hr style="margin: 10px">
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