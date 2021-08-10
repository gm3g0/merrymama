@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|QA編輯</title>
@endsection
@section('name')
<style>
  #chc1,#chc3, #chc4,#chc5, #chc6,#chc7,#chc8,#chc9 {
    color: black;

} 
#chc2 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
  <h2>QA編輯</h2>
  <form id="msform" method="POST">
    <div class="row col-md-2 align-self-start"style="padding-left: 22px;"><button type="button" class="next action-buttonb" data-bs-toggle="modal" data-bs-target="#new">新增</button></div>
    <div class="container text-start justify-content-center">
      <div class="card">
        <div class="card-header">
          Q<textarea name="" >Q</textarea>
        </div>
        <div class="card-body">
          A<textarea name=""  style="height: 100px">A</textarea>
        </div>
      </div>
    </div>
    <div class="modal fade" id="new" data-bs-backdrop="static"  aria-labelledby="new" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">新增QA</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
  
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="row col-md-12 text-start justify-content-center">
                      <div class="col-md-10">Q：<textarea name="" style="height: 100px"></textarea></div>
                      <div class="col-md-10">A：<textarea name="" style="height: 100px"></textarea></div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <div class="modal-footer">
              <button type="submit" class="previous action-button-previous" data-bs-dismiss="modal">取消</button>
              <button type="submit" class="next action-buttonb">確認</button>
          </div>
        
      </div>
      </div>
  </div>
<br>
  <button class="next action-buttonb" type="submit">修改</button>
</form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection