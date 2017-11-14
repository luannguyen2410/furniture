<!DOCTYPE html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>Login Page</title>

  <link href="{{ URL::asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/elegant-icons-style.css') }}" rel="stylesheet">
  <script src="{{ URL::asset('js/jquery-3.2.1.js') }}"></script>
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="{{URL::to('/')}}/admin/login/login" method="POST">
    {{ csrf_field() }}
      <div class="login-wrap">
      @if ($message)
        <div class="alert alert-danger">
        {{ $message }} 
        </div>
        @endif
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" id="password"  name="password" class="form-control" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit">Login</button>
      </div>
    </form>
   
  </div>

  <script>
    $('#loginBtn').on('click',function(){
        $.ajax({
            type:'POST',
            url:'{{URL::to('/')}}/admin/login/login',
            data:{
                '_token': '<?php echo csrf_token() ?>',
                username : $('#username').val(),
                password : $('#password').val()
            },
            success:function(data){
                if(data.msg == 'fail'){
                    alert('login fail');
                }
                reload();
            }
        });
    });

  </script>
</body>

</html>
