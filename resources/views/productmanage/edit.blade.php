@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|商品管理_商品編輯</title>
@endsection

@section('main')
  <h2>商品管理-商品編輯</h2>
<form action=""  method="" id="msform">  
  <div class="row col-md-2 align-self-start"style="padding-right: 50px;padding-left: 30px;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new">新增</button></div>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">修改</button>
                      </div>
                    </td>
                </tr>
        </tbody>
      </table>
    </div>
  </section>
  <div class="d-grid gap-2 col-md-2 mx-auto">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">刪除</button>
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
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary">確認</button>
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
        <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
            <button type="submit" class="btn btn-primary">確認</button>
        </div>
      </div>
    </div>
    </div>
</div>
{{-- 修改 --}}
<div class="modal fade" id="edit" data-bs-backdrop="static"  aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
      <div class="modal-header">
          {{-- <input type="hidden" name="fId"> --}}
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
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
          <button type="submit" class="btn btn-primary">確認</button>
      </div>
      </div>
  </div>
</div>
</form>  
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection