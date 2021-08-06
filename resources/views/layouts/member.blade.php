<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"
    />
    <link rel="icon" href="favicon.ico" type="image/x-icon" /> 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    {{-- <link rel="icon.png" type="image/x-icon"/> --}}
    @yield('css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    
    @yield('title')
</head>
<body >
    <div>
        <!-- Navigation導覽列 -->
        <!-- navbar只有light,dark,為設定字體顏色 -->
        <nav class="navbar navbar-expand-lg navbar-light static-top" style="background-color: #fdd977 ">
          <div class="container">
            <button class="navbar-brand no-gutters" style="border: 0px;background: transparent;">
              <img src="{{ asset('/logo.png')}}" height="90px" width="140px" style="margin: 0px;padding: 0px;" alt="icon" class="navbar-brand no-gutters">
              中科分店
            </button>

            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <button id="myb" class="nav-link" onclick="location.href='{{route('homepage.index')}}'">首頁
                  <span class="sr-only">(current)</span></button>
              </li>
              <li class="nav-item">
                <button id="myb" class="nav-link" onclick="location.href='{{route('buy.index')}}'">我要購買</button>
              </li>
              <li class="nav-item ">
                <button id="myb" class="nav-link" onclick="location.href='{{route('product.index')}}'">商品介紹</button>
              </li>
              <li class="nav-item ">
                <button id="myb" class="nav-link" onclick="location.href='{{route('QA.index')}}'">常見Q&A</button>
              </li>
              <li class="nav-item">
                <button id="myb" class="nav-link" onclick="location.href='{{route('story.index')}}'">品牌故事</button>
              </li>
              <li class="nav-item">
                <button id="myb" class="nav-link" onclick="location.href='{{route('contact.index')}}'">聯絡資訊</button>
              </li>
              <li class="nav-item">
                <button id="myb" class="nav-link" onclick="location.href='{{route('member.index')}}'">會員專區</button>
              </li>
              <li class="nav-item">
                <button id="myb" class="nav-link" >登出</button>
              </li>        
              </ul>
              <ul class="navbar-nav">                           
                <!-- This menu is hidden in bigger devices with d-sm-none. -->
                <li class="nav-item dropdown d-sm-block d-md-none" >
                      <button class="dropdown-item ch1" onclick="location.href='{{route('member.index')}}'">訂單查看</button>
                      <button class="dropdown-item ch2" onclick="location.href='{{route('be_member.edit')}}'">修改資料</button>                                                                     
                </li><!-- Smaller devices menu END -->
              </ul>
            </div>
          </div>
        </nav>
      <!-- /.container -->
    </div>
<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded d-none d-md-block" style="width: 230px;"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
  <!-- Bootstrap List Group -->
  <ul class="list-group">
      <!-- Separator with title -->
      
      <!-- /END Separator -->
      <!-- Menu with submenu -->

    
</div><!-- sidebar-container END -->
        
        <div class="col warp">
          <div class="row justify-content-center mt-0">

            <div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3" id="member">

              <div class="col-lg-2 js-scrollspy-nav side" style="height: 50px;">
                <div class="col-12">會員專區<hr style="height:1px;border:none;border-top:1px dashed #0066CC;"/></div>
                <button class=" flex-column align-items-start ch1" id=myb style="margin-bottom: 20px" onclick="location.href='{{route('member.index')}}'">
                    <div class="d-flex w-100 align-items-center col-md-12">
                        {{-- <span class="far fa-list-alt fa-fw mr-3"aria-hidden="true"></span> --}}
                        <span class="menu-collapsed" >訂單查看</span>    
                    </div>
                </button><br>
                <button class="flex-column align-items-start ch2"id=myb onclick="location.href='{{route('be_member.edit')}}'">
                  <div class="d-flex w-100 align-items-center col-md-12">
                      {{-- <span class="fas fa-edit fa-fw mr-3"aria-hidden="true"></span> --}}
                      <span class="menu-collapsed" >修改資料</span>    
                  </div>
              </button>
              </div>
        @yield('main')
        
      </div></div></div>
      <i class="fas fa-arrow-up text-center" id=top style="display: none"><br>TOP</i>
      <footer class="footer">
        <label class="col align-self-center"style="margin-top: 15px;">Copyright © 2021 瑪利MAMA 中科大團隊 products. 版權所有</label>
      </footer>

      <script>
        $("#top").click(function(){
          jQuery("html,body").animate({
              scrollTop:0
          },100);
        });
        $(window).scroll(function() {
          if ( $(this).scrollTop() > 200){
              $('#top').fadeIn("fast");
          } else {
              $('#top').stop().fadeOut("fast");
          }
        });
      </script>
  
  <script>// Hide submenus
    $('#body-row .collapse').collapse('hide'); 
    
    // Collapse/Expand icon
    $('#collapse-icon').addClass('fa-angle-double-left'); 
    
    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function() {
        SidebarCollapse();
    });
    
    function SidebarCollapse () {
        $('.menu-collapsed').toggleClass('d-none');
        $('.sidebar-submenu').toggleClass('d-none');
        $('.submenu-icon').toggleClass('d-none');
        $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
        
        // Treating d-flex/d-none on separators with title
        var SeparatorTitle = $('.sidebar-separator-title');
        if ( SeparatorTitle.hasClass('d-flex') ) {
            SeparatorTitle.removeClass('d-flex');
        } else {
            SeparatorTitle.addClass('d-flex');
        }
        
        // Collapse/Expand icon
        $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
    }</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"
></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
crossorigin="anonymous"
></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
crossorigin="anonymous"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>