@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|訂單管理_歷史訂單</title>
@endsection

@section('main')
<h2>訂單管理-歷史訂單</h2><br>
<div class="accordion" id="accordionExample"><!--手風琴-->

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOnee">
      <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapseOnee" aria-expanded="false" aria-controls="collapseOnee" >
        <div class="row">
          <div class="fs" style="font-size: 16px">取貨日期：&nbsp;&nbsp;總金額：</div>
        </div>
      </button>
    </h2>
      <div id="collapseOnee" class="accordion-collapse collapse" aria-labelledby="headingOnee" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          
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
      </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingtwoo">
      <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapsetwoo" aria-expanded="false" aria-controls="collapsetwoo" >
        <div class="row">
          <div class="fs" style="font-size: 16px">取貨日期：&nbsp;&nbsp;總金額：</div>
        </div>
      </button>
    </h2>
      <div id="collapsetwoo" class="accordion-collapse collapse" aria-labelledby="headingtwoo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          
          <div class="accordion" id="accordionExample"><!--手風琴-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne1">
                <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" >
                  <div class="row">
                    <div class="fs" style="font-size: 16px">訂單編號：&nbsp;&nbsp;金額：&nbsp;&nbsp;會員：</div>
                  </div>
                </button>
              </h2>
                <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionExample">
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
          </div>

        </div>
      </div>
  </div>

</div>
  
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection