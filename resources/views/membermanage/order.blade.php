@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|會員管理_會員資訊</title>
@endsection

@section('main')
<h2>會員管理</h2>
<form id="msform" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-start justify-content-center">
        <div class="col-md-9">名稱：<input type="text" name="nstore"></div>
        <div class="col-md-9">帳號(E-mail)：<input type="text" name="nstphone"></div>
        <div class="col-md-9">電話：<input type="text" name="nadd"></div>
      </div>
    </div>

  <h5 class="row justify-content-between">
    <div class="col-md-4 text-start">訂購次數：<strong>122</strong></div>
    <div class="col-md-4 text-end">累計金額：<strong>122</strong></div>
  </h5>
</div>
<section class="table table-hover">
  <div class="col align-self-center"> <!--時間表-->
    <table cellpadding="0" cellspacing="0" >
      <thead>
        <tr class="tbl-header">
          <th><h6><b> 訂單編號</th>
          <th><h6><b> 金額</th>
          <th><h6><b> 日期</th>
        </tr>
      </thead>
  </div>
  <div class="tbl-content">
      <tbody >
              <tr>
                  <td>
                    <div class="accordion" id="accordionExample"><!--手風琴-->

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button  collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
                            <div class="row">
                              <div class="fs" style="font-size: 16px">訂單編號：</div>
                            </div>
                          </button>
                        </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <div class="row col-md-12 text-start align-self-center" style="margin: 0px;padding:0px">
                                  <div class="col-md-8">
                                    不知道不知道不知道不知道
                                  </div>
                                  <div class="col-md-4">
                                    Ｘ0
                                  </div>
                                  <hr style="margin: 10px;width: 180px">
                                  <div class="col-md-8">
                                    不知道不知道
                                  </div>
                                  <div class="col-md-4">
                                    Ｘ0
                                  </div>
                                  <hr style="margin: 10px;width: 180px">
                                </div><br>

                            </div>
                          </div>
                      </div>
                    </div>
                  </td>
                  <td>02</td>  
                  <td>02</td>
              </tr>
      </tbody>
    </table>
  </div>
</section>
</form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection