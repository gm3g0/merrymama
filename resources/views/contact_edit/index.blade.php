@extends('layouts.staff2')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css')}}"/>
@endsection

@section('title')
    <title>瑪利MAMA後台|聯絡資訊</title>
@endsection
@section('name')
<style>
  #chc2,#chc3, #chc1,#chc5, #chc6,#chc7,#chc8,#chc9 {
    color: black;
} 
#chc4 {
    color: black;
    background-color: #fdd977;
    border-bottom-width:3px 
} 
</style>
@endsection
@section('main')
  <h2>聯絡資訊</h2>
  @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif
  @if(session()->has('notice'))
        <div class="alert alert-warning">
            {{ session()->get('notice') }}
        </div>
  @endif
  <form id="msform" action="{{ route('contact_edit.contact_edit')}}"  method="post">
    @csrf
    <div class="container">
      <div class="row justify-content-center">
        <div class="row col-md-8 text-start justify-content-center">
          <div class="col-md-9">電話：<input type="text" name="Shop_tel" value="{{ $contact[1]->Shop_tel }}"></div>
          <div class="col-md-9">E-mail：<input type="email" value="{{ $contact[1]->Shop_email }}" name="Shop_email"></div>
        </div>
      </div>
    </div>
  <button class="next action-buttonb" type="submit">修改</button>
</form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection