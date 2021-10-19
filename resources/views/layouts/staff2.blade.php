<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate" />
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

    @yield('javascript')
    @yield('name')
    @yield('title')
</head>
<body>
    <div>
        <!-- Navigation導覽列 -->
        <!-- navbar只有light,dark,為設定字體顏色 -->
        <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #6C4438 ">
          <div class="container">
            <button class="navbar-brand no-gutters" style="border: 0px;background: transparent;"id="myb"onclick="location.href='{{route('homepage.index')}}'">
              <img src="{{ asset('/logo.png')}}" height="90px" width="140px" style="margin: 0px;padding: 0px;" alt="icon" class="navbar-brand no-gutters">
              回前台
            </button>
          </div>
        </nav>
      <!-- /.container -->
    </div>

    <div class="navbar navbar-light">
      <button class="sidebar " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" id="myb">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    {{-- <button class="sidebar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" id="myb">
       <span class="fa-stack fa-lg">
        <i class="far fa-square fa-stack-2x"></i>
        <i class="fas fa-bars fa-stack-1x"></i>
      </span> 
    </button> --}}
      
    <div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 265px">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        
        <div class="js-scrollspy-nav" style="height: 50px;">
          <!-- Sidebar -->
          <div id="sidebar-container"  style="width: 230px;"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group">
                <!-- Menu with submenu -->
                <a href="#submenu1" class="bg-transparent list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false">
                  <div class="d-flex w-100 justify-content-start align-items-center"style="color: black">
                      <span class="menu-collapsed">前台編輯</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
                </a>
                <div id='submenu1' class="collapse sidebar-submenu show active" >
                    <button onclick="location.href='{{route('edit_homepage.index')}}'" class="list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc1">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-home fa-fw mr-3"aria-hidden="true"></span> 
                            <span class="menu-collapsed" >首頁</span>
                        </div>
                    </button>
                    <button onclick="location.href='{{route('edit_QA.index')}}'" class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc2">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            {{-- <span class="fas fa-question-circle fa-fw mr-3"aria-hidden="true"></span> --}}
                            <span class="fa-stack fa-fw mr-3"aria-hidden="true" style="font-size: 12px">
                              <i class="far fa-comment fa-stack-2x"></i>
                              <i class="fas fa-question fa-stack-1x"></i>
                            </span> 
                            <span class="menu-collapsed" >QA</span>
                        </div>
                    </button>
                    <button  onclick="location.href='{{route('backbuy.index')}}'"  class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc3">
                      <div class="d-flex w-100 justify-content-start align-items-center">
                          <span class="fas fa-shopping-cart fa-fw mr-3"aria-hidden="true"></span>
                          <span class="menu-collapsed" >我要購買</span>    
                      </div>
                    </button>
                    <button onclick="location.href='{{route('contact_edit.index')}}'" class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc4">
                      <div class="d-flex w-100 justify-content-start align-items-center">
                          <span class="fas fa-address-book fa-fw mr-3"aria-hidden="true"></span>
                          <span class="menu-collapsed" >聯絡資訊</span>
                      </div>
                    </button>
                </div>

                  <a href="#submenu2" class="bg-transparent list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false">
                      <div class="d-flex w-100 justify-content-start align-items-center"style="color: black">
                          <span class="menu-collapsed">訂單管理</span>
                          <span class="submenu-icon ml-auto"></span>
                      </div>
                  </a>
                  <div id='submenu2' class="collapse sidebar-submenu show active" >
                      <button onclick="location.href='{{route('ordermanage.index')}}'" class="list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc5">
                          <div class="d-flex w-100 justify-content-start align-items-center">
                              <span class="fas fa-clipboard-list fa-fw mr-3"aria-hidden="true"></span> 
                              <span class="menu-collapsed" >訂單資訊</span>
                          </div>
                      </button>
                      <button onclick="location.href='{{route('ordermanage.history')}}'" class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc6">
                          <div class="d-flex w-100 justify-content-start align-items-center">
                              <span class="fas fa-tasks fa-fw mr-3"aria-hidden="true"></span>
                              <span class="menu-collapsed" >歷史訂單</span>
                          </div>
                      </button>
                  </div>
            
                <button  onclick="location.href='{{route('productmanage.index')}}'"  class="bg-transparent list-group-item list-group-item-action flex-column align-items-start"id="chc7">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-edit fa-fw mr-3"aria-hidden="true"></span>
                      <span class="menu-collapsed" >商品編輯</span>    
                  </div>
                </button>
                
                <button onclick="location.href='{{route('membermanage.index')}}'" class="bg-transparent list-group-item list-group-item-action flex-column align-items-start"id="chc8">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-user fa-fw mr-3"aria-hidden="true"></span>
                        <span class="menu-collapsed" >會員管理</span>    
                    </div>
                </button>
                
                <button onclick="location.href='{{route('data.index')}}'"  class="bg-transparent list-group-item list-group-item-action flex-column align-items-start"id="chc9">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="far fa-chart-bar fa-fw mr-3"aria-hidden="true"></span>
                        <span class="menu-collapsed" >數據統計</span>   
                    </div>
                </button>
                <button onclick="location.href='{{route('logout')}}'"  class="bg-transparent list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center" style="color: black">
                      <span class="fas fa-sign-out-alt fa-fw mr-3"aria-hidden="true"></span>
                      <span class="menu-collapsed" >登出</span>   
                  </div>
                </button>
          </div><!-- sidebar-container END -->

        </div>
      </div>
    </div>

    <div class="col warp">
      <div class="row justify-content-center mt-0">

        <div class="col-12 col-sm-10 col-md-10 col-lg-8  text-center p-0 mt-5 mb-3" id="member">

          <div class="col-lg-2 js-scrollspy-nav" id="side" style="height: 50px;">
            <!-- Sidebar -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block" style="width: 230px;"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
              <!-- Bootstrap List Group -->
              <ul class="list-group">
                  <!-- Menu with submenu -->
                <a href="#submenu1" class="bg-transparent list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false">
                  <div class="d-flex w-100 justify-content-start align-items-center"style="color: black">
                      <span class="menu-collapsed">前台編輯</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
                </a>
                <div id='submenu1' class="collapse sidebar-submenu show active" >
                    <button onclick="location.href='{{route('edit_homepage.index')}}'" class="list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc1">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-home fa-fw mr-3"aria-hidden="true"></span> 
                            <span class="menu-collapsed" >首頁</span>
                        </div>
                    </button>
                    <button onclick="location.href='{{route('edit_QA.index')}}'" class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc2">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            {{-- <span class="fas fa-question-circle fa-fw mr-3"aria-hidden="true"></span> --}}
                            <span class="fa-stack fa-fw mr-3"aria-hidden="true" style="font-size: 12px">
                              <i class="far fa-comment fa-stack-2x"></i>
                              <i class="fas fa-question fa-stack-1x"></i>
                            </span> 
                            <span class="menu-collapsed" >QA</span>
                        </div>
                    </button>
                    <button  onclick="location.href='{{route('backbuy.index')}}'"  class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc3">
                      <div class="d-flex w-100 justify-content-start align-items-center">
                          <span class="fas fa-shopping-cart fa-fw mr-3"aria-hidden="true"></span>
                          <span class="menu-collapsed" >我要購買</span>    
                      </div>
                    </button>
                    <button onclick="location.href='{{route('contact_edit.index')}}'" class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc4">
                      <div class="d-flex w-100 justify-content-start align-items-center">
                          <span class="fas fa-address-book fa-fw mr-3"aria-hidden="true"></span>
                          <span class="menu-collapsed" >聯絡資訊</span>
                      </div>
                    </button>
                </div>

                  <a href="#submenu2" class="bg-transparent list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false">
                      <div class="d-flex w-100 justify-content-start align-items-center"style="color: black">
                          <span class="menu-collapsed">訂單管理</span>
                          <span class="submenu-icon ml-auto"></span>
                      </div>
                  </a>
                  <div id='submenu2' class="collapse sidebar-submenu show active" >
                      <button onclick="location.href='{{route('ordermanage.index')}}'" class="list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc5">
                          <div class="d-flex w-100 justify-content-start align-items-center">
                              <span class="fas fa-clipboard-list fa-fw mr-3"aria-hidden="true"></span> 
                              <span class="menu-collapsed" >訂單資訊</span>
                          </div>
                      </button>
                      <button onclick="location.href='{{route('ordermanage.history')}}'" class=" list-group-item list-group-item-action flex-column align-items-start"style="padding-left:30px"id="chc6">
                          <div class="d-flex w-100 justify-content-start align-items-center">
                              <span class="fas fa-tasks fa-fw mr-3"aria-hidden="true"></span>
                              <span class="menu-collapsed" >歷史訂單</span>
                          </div>
                      </button>
                  </div>
            
                <button  onclick="location.href='{{route('productmanage.index')}}'"  class="list-group-item list-group-item-action flex-column align-items-start"id="chc7">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-edit fa-fw mr-3"aria-hidden="true"></span>
                      <span class="menu-collapsed" >商品編輯</span>    
                  </div>
                </button>
                
                <button onclick="location.href='{{route('membermanage.index')}}'" class="list-group-item list-group-item-action flex-column align-items-start"id="chc8">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-user fa-fw mr-3"aria-hidden="true"></span>
                        <span class="menu-collapsed" >會員管理</span>    
                    </div>
                </button>
                
                <button onclick="location.href='{{route('data.index')}}'"  class=" list-group-item list-group-item-action flex-column align-items-start"id="chc9">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="far fa-chart-bar fa-fw mr-3"aria-hidden="true"></span>
                        <span class="menu-collapsed" >數據統計</span>   
                    </div>
                </button>
                <button onclick="location.href='{{route('data.index')}}'"  class="bg-transparent list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center"style="color: black">
                      <span class="fas fa-sign-out-alt fa-fw mr-3"aria-hidden="true"></span>
                      <span class="menu-collapsed" >登出</span>   
                  </div>
                </button>
              </div><!-- sidebar-container END -->

          </div>


        @yield('main')
        
      </div></div></div>
      <i class="fas fa-arrow-up text-center" id=top style="display: none"><br>TOP</i>
      <i class="fas fa-arrow-down text-center" id=down style="display: none"><br>DOWN</i>
      <footer class="backfooter">
        <label class="col align-self-center"style="margin-top: 15px;">Copyright © 2021 瑪利MAMA 中科大團隊 products. 版權所有</label>
      </footer>

      <script>
        // $("#top").click(function(){
        //   jQuery("html,body").animate({
        //       scrollTop:0
        //   },100);
        // });
        // var element = document.getElementById('side');
        // $(window).scroll(function() {
        //   if ( $(this).scrollTop() > 50){
        //       element.style.top = "60px"
        //   } else {
        //       element.style.top = "140px"
        //   }
        // });
        // $(window).scroll(function() {
        //   if ( $(this).scrollTop() > 200){
        //       $('#top').fadeIn("fast");
        //   } else {
        //       $('#top').stop().fadeOut("fast");
        //   }
        // });
        $("#top").click(function(){
      jQuery("html,body").animate({
          scrollTop:0
      },100);
    });
    $("#down").click(function(){
      jQuery("html,body").animate({
          scrollTop:$(document).height()
      },100);
    });
    $(window).scroll(function() {
      if ( $(this).scrollTop() > 200){
          $('#top').fadeIn("fast");
      } else {
          $('#top').stop().fadeOut("fast");
      }
    });
    $(window).scroll(function() {
          $('#down').fadeIn("fast");
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>