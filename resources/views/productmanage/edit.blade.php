@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|商品管理_商品編輯</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc4,#chc5, #chc6,#chc1,#chc8,#chc9 {
    color: black;
} 
#chc7 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
<style>
 


/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
        text-align: center
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>
@section('main')
  <h2>商品管理-商品編輯</h2>
<form action=""  method="" id="msform">  
  <div class="row col-md-2 align-self-start"style="padding-left: 22px;"><button type="button" class="next action-buttonb" data-bs-toggle="modal" data-bs-target="#new">新增</button></div>
   <section class="table table-hover">
    <div class="col align-self-center table-wrapper"> <!--時間表-->
      <table cellpadding="0" cellspacing="0" class="fl-table">
        <thead>
          <tr class="tbl-header">
            <th><h6><b> 麵包名稱</th>
            <th><h6><b> 介紹</th>
            <th><h6><b> 分類</th>
            <th><h6><b> 價格</th>
            <th><h6><b> 圖片</th>
            <th><h6><b> 刪除</th>
            <th><h6><b> 修改</th>
          </tr>
        </thead>
    </div>
    <div class="tbl-content">
        <tbody >
                <tr>
                    <td>02</td>
                    <td>02</td>  
                    <td>02</td>
                    <td>02</td>
                    <td>02</td>
                    <td ><div class="text-center"><input type="checkbox" id="checkboxNoLabel" style="height: 15px;width:15px"></div></td>
                    <td>
                      <div>
                        <button type="button"  class="btn  next action-buttonb" data-bs-toggle="modal" data-bs-target="#edit">修改</button>
                      </div>
                    </td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>02</td>  
                  <td>02</td>
                  <td>02</td>
                  <td>02</td>
                  <td ><div class="text-center"><input type="checkbox" id="checkboxNoLabel" style="height: 15px;width:15px"></div></td>
                  <td>
                    <div>
                      <button type="button"  class="btn next action-buttonb" data-bs-toggle="modal" data-bs-target="#edit">修改</button>
                    </div>
                  </td>
              </tr>
              <tr>
                <td>02</td>
                <td>02</td>  
                <td>02</td>
                <td>02</td>
                <td>02</td>
                <td ><div class="text-center"><input type="checkbox" id="checkboxNoLabel" style="height: 15px;width:15px"></div></td>
                <td>
                  <div>
                    <button type="button"  class="btn next action-buttonb" data-bs-toggle="modal" data-bs-target="#edit">修改</button>
                  </div>
                </td>
            </tr>
        </tbody>
      </table>
    </div>
  </section> 

  <section class="table table-hover">
    <div class="col align-self-center"> <!--時間表-->
      <table cellpadding="0" cellspacing="0" >
        <thead>
          <tr class="tbl-header">
            <th><h6><b> 麵包名稱</th>
            <th><h6><b> 介紹</th>
            <th><h6><b> 分類</th>
            <th><h6><b> 價格</th>
            <th><h6><b> 圖片</th>
            <th><h6><b> 刪除</th>
            <th><h6><b> 修改</th>
          </tr>
        </thead>
    </div>
    <div class="tbl-content">
        <tbody >
                <tr>
                    <td>02</td>
                    <td>02</td>  
                    <td>02</td>
                    <td>02</td>
                    <td>02</td>
                    <td ><div class="text-center"><input type="checkbox" id="checkboxNoLabel" style="height: 15px;width:15px"></div></td>
                    <td>
                      <div>
                        <button type="button" class="btn next action-buttonb"data-bs-toggle="modal" data-bs-target="#edit">修改</button>
                      </div>
                    </td>
                </tr>
        </tbody>
      </table>
    </div>
  </section>
  <div class="d-grid gap-2 col-md-2 mx-auto">
    <!-- Button trigger modal -->
    <button type="button" class="next action-buttonb" data-bs-toggle="modal" data-bs-target="#exampleModal">刪除</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                {{-- <input type="hidden" name="fId"> --}}
                <h5 class="modal-title" id="exampleModalLabel">確認刪除</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    確定要刪除嗎?
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="previous action-button-previous" data-bs-dismiss="modal">取消</button>
                <button type="submit" class="next action-buttonb">確認</button>
            </div>
            </div>
        </div>
    </div>
  </div>

{{-- 新增 --}}
  <div class="modal fade" id="new" data-bs-backdrop="static"  aria-labelledby="new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">新增麵包</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">

              <div class="container">
                <div class="row justify-content-center">
                  <div class="row col-md-12 text-start justify-content-center">
                    <div class="col-md-10">名稱：<input type="text" name=""></div>
                    <div class="col-md-10">價格：<input type="text" name=""></div>
                    <div class="col-md-10" style="margin-bottom: 25px;">分類：<br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">星期一</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">星期二</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">星期三</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">星期四</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">星期五</label>
                      </div>
                    </div>
                    <div class="col-md-10"style="margin-bottom: 25px;">圖片：<input type="file" class="form-control" name=""/></div>
                    <div class="col-md-10">介紹：<textarea name="" style="height: 100px"></textarea>
                  </div>
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

{{-- 修改 --}}
<div class="modal fade" id="edit" data-bs-backdrop="static"  aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">修改資料</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <div class="container">
              <div class="row justify-content-center">
                <div class="row col-md-12 text-start justify-content-center">
                  <div class="col-md-10">名稱：<input type="text" name=""></div>
                  <div class="col-md-10">價格：<input type="text" name=""></div>
                  <div class="col-md-10" style="margin-bottom: 25px;">分類：<br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">星期一</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">星期二</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">星期三</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">星期四</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">星期五</label>
                    </div>
                  </div>
                  <div class="col-md-10"style="margin-bottom: 25px;">圖片：<input type="file" class="form-control" name=""/></div>
                  <div class="col-md-10">介紹：<textarea name="" style="height: 100px"></textarea>
                </div>
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
</form>  
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection