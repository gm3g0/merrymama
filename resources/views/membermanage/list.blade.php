@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|會員管理</title>
@endsection

@section('main')
<h2>會員管理</h2>
<form action="" method="POST" id="msform">
    {{-- @method('GET') --}}
    @csrf
  <div class="row g-3 align-items-center float-right" style="padding: 0px;">
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">名稱：</label>
    </div>
    <div class="col-auto">
        <input type="text" value="" name="" class="form-control"id="" >
    </div>
    <div class="col-auto">
        <button type="submit" class="next action-buttonb" style="outline: none;">搜尋</button>
    </div>
  </div><br>

  <section class="table table-hover">
    <div class="col align-self-center"> <!--時間表-->
      <table cellpadding="0" cellspacing="0" >
        <thead>
          <tr class="tbl-header">
            <th><h6><b> 名稱</th>
            <th><h6><b> 帳號</th>
            <th><h6><b> 電話</th>
            <th><h6><b> 訂購次數</th>
          </tr>
        </thead>
    </div>
    <div class="tbl-content">
        <tbody >
                <tr>
                    <td><a style="cursor: pointer; text-decoration:underline;color:#FEC601;font-size:16px"onclick="location.href='{{route('memberrmanage.order')}}'">名稱</a></td>
                    <td>02</td>  
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