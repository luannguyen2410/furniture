<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">

  <title>@yield('title')</title>
  <link href="{{ URL::asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/summernote.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/datatable.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  <script src="{{ URL::asset('js/jquery-3.2.1.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/summernote.js')}}"></script>
  <script src="{{ URL::asset('js/scripts.js') }}"></script>
  <script src="{{ URL::asset('js/datatable.js')}}"></script> 

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
        </div>
      </div>

      <!--logo start-->
      <a href="dashboard" class="logo"><img id="logo" src="{{ URL::asset('img/logo.png')}}" style="height:60px">   <span class="lite">Admin</span></a>
      <!--logo end-->
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
        <li id="task_notificatoin_bar">
        <h4 class="lite" style="margin-right: 10px;"><button id="viewUserDetail" type="button" class="btn btn-link" style="top: -8px;position: relative;">Welcome @yield('username')</button></h4>
        </li>
          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar">
            
            <a href="{{URL::to('/')}}/admin/logout">
               <span class="glyphicon glyphicon-off"></span>
            </a>
          </li>
         
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="dashboard">
                <span class="glyphicon glyphicon-home"></span>
                <span>Dashboard</span>
                </a>
          </li>
          <!--<li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">Form Elements</a></li>
              <li><a class="" href="form_validation.html">Form Validation</a></li>
            </ul>
          </li>-->
          
          <li>
            <a class="" href="user">
                <span class="glyphicon glyphicon-user"></span>
                <span>User</span>
            </a>
          </li>
          <li>
            <a class="" href="product">
                <span class="glyphicon glyphicon-list-alt"></span>
                <span>Product</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        @yield('content')  
    <!--main content end-->
    </section>
<div id="userDetailModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">User Detail</h4>
    </div>
    <div class="modal-body">
          <form class="form-horizontal" action="/action_page.php">
              <div class="form-group">
                  <label class="control-label col-sm-2" for="detailUsername">Username:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="detailUsername" placeholder="username" name="username" readonly="true">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="detailPassword">Password:</label>
                  <div class="col-sm-10">
                      <input type="button" id="detailPassword" class="btn btn-primary" name="password" value="change password">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="detailEmail">Email:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="detailEmail" placeholder="email" name="email">
                  </div>
              </div>
              <div class="form-group">        
                  <label class="control-label col-sm-2" for="detailRole">Role:</label>
                  <div class="col-sm-10">          
                      <select class="form-control" id="detailRole" style="width:auto">
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">        
                  <label class="control-label col-sm-2" for="detailStatus">Status:</label>
                  <div class="col-sm-10">          
                      <select class="form-control" id="detailStatus" style="width:auto">
                          <option value="1">Active</option>
                          <option value="0">Un Active</option>
                      </select>
                  </div>
              </div>
          </form>
    </div>
    <div class="modal-footer">
      <button id="detailsubmit" type="submit" class="btn btn-default">Submit</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>

<div id="changePassModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Change password</h4>
    </div>
    <div class="modal-body">
    <form class="form-horizontal" >
              <div class="form-group">
                  <label class="control-label col-sm-2" for="changepass">Password:</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="changepass" placeholder="password" name="password">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="repass">RePassword:</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="repass" placeholder="repassword" name="repassword">
                  </div>
              </div>
          </form>
    </div>
    <div class="modal-footer">
      <button id="detailChange" type="button" class="btn btn-danger">Change Password</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<script>
  $('#viewUserDetail').on('click',function(){
      $('#detailStatus').val('1');
      $('#detailEmail').val('');
      $('#detailRole').val('admin');
      $('#detailUsername').val('');
          $.ajax({
              type:'POST',
              url:'{{URL::to('/')}}/admin/user/current/view',
              data:{
                  '_token': '<?php echo csrf_token() ?>'
              },
              success:function(data){
                  $('#detailUsername').val(data.user.username);
                  $('#detailEmail').val(data.user.email);
                  $('#detailRole').val(data.user.role);
                  $('#detailStatus').val(data.user.status);
              }
          });
          $('#userDetailModal').modal();
  });
  $('#detailPassword').on('click',function(){
    $('#userDetailModal').modal('hide');
    $('#repass').val('');
    $('#changepass').val('');
    $('#changePassModal').modal();
  });
  $('#detailChange').on('click',function(){
    $.ajax({
              type:'POST',
              url:'{{URL::to('/')}}/admin/user/current/change',
              data:{
                  '_token': '<?php echo csrf_token() ?>',
                  repassword : $('#repass').val(),
                  password : $('#changepass').val()
              },
              success:function(data){
                  if(!data.msg==='success'){alert(data.msg);}
                  $('#changePassModal').modal('hide');
              }
          });
  });
  $('#detailsubmit').on('click',function(){
    
    $.ajax({
      type:'POST',
      url:'{{URL::to('/')}}/admin/user/current/edit',
      data:{
          '_token': '<?php echo csrf_token() ?>',
          email: $('#detailEmail').val(),
          role: $('#detailRole').val(),
          status: $('#detailStatus').val()
      },
      success:function(data){
          if(!data.msg==='success'){alert(data.msg);}
      }
    });
    $('#userDetailModal').modal('hide');
  });
</script>
</body>

</html>
