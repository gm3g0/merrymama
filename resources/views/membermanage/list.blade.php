@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
    
@endsection

@section('title')
    <title>瑪利MAMA後台|會員管理</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc4,#chc5, #chc6,#chc7,#chc1,#chc9 {
    color: black;

} 
#chc8 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
<h2>會員管理</h2>
<form action="" method="POST" id="msform">
    {{-- @method('GET') --}}
    @csrf
  @if(session()->has('notice'))
    <div class="alert alert-warning">
      {{ session()->get('notice') }}
    </div>
  @endif
  <div class="row g-3 align-items-center float-right" style="padding: 0px;"id="msform">
    
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">名稱：</label>
    </div>
    <div class="col-auto">
        <input type="text" value="" name="search" class="form-control"id="" >
    </div>
    <div class="col-auto">
        <button type="submit" class="next action-buttonb" style="outline: none;">搜尋</button>
    </div>
  </div><br>

  <section class="table table-hover">
    <div class="col align-self-center"> <!--時間表-->
      <table cellpadding="0" cellspacing="0" id="table">
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
        @foreach($showdata as $show)
          @if($show->proof == 0)
          <tr>      
              <td><a style="cursor: pointer; text-decoration:underline;color:#FEC601;font-size:16px"onclick="location.href='{{ route('memberrmanage.order' ,  $show->name )}}'">{{ $show->name }}</a></td>
              <td>{{ $show->email }}</td>  
              <td>{{ $show->tel }}</td>
              @if($show->count == NULL)
                <td>0</td>
              @else
                <td>{{ $show->count }}</td>
              @endif
          </tr>
          @endif      
        @endforeach
        </tbody>
      </table>
    </div>
  </section>


</form>
  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection