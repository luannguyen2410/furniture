@extends('backendtemplate')
@section('title', 'User')
@section('username')
    <span>{{$username}}</span>
@endsection
@section('content')

<div id="userBody" class="container" style="padding-top: 20px; max-width:985px">
<h2>User</h2>
<a action="add" class="btn btn-primary display_modal" style="margin-bottom:5px">Add New</a>
<table class="table table-striped table-bordered dataTable no-footer">
  <thead>
    <tr>
      <th>UserName</th>
      <th>Email</th>
      <th>Role</th>
      <th style="width: 270px">Action</th>
    </tr>
  </thead>
  <tbody id="userTable">
      @foreach ($users as $user)
          <tr>
              <td> {{ $user->username }}</td>
              <td> {{ $user->email }}</td>
              <td> {{ $user->role }}</td>
              <td>
              <a action="reset" username="{{ $user->username }}" class="btn btn-primary display_modal" data-toggle="modal" data-target="#resetModal">
                  Change Password</a>
              <a action="edit" username="{{ $user->username }}" class="btn btn-warning display_modal">
                  Edit</a>
              <a action="delete" username="{{ $user->username }}" class="btn btn-danger display_modal" data-toggle="modal" data-target="#deleteModal">
                  Delete</a>
          </td>
        </tr>
      @endforeach
  </tbody>
</table>
</div>

<div id="userModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 id="modal_title" class="modal-title">Modal Header</h4>
    </div>
    <div class="modal-body">
          <form class="form-horizontal" action="/action_page.php">
              <div class="form-group">
                  <label class="control-label col-sm-2" for="username">Username:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" placeholder="username" name="username">
                  </div>
              </div>
              <div id="password_form" class="form-group">
                  <label class="control-label col-sm-2" for="password">Password:</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" placeholder="password" name="password">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" placeholder="email" name="email">
                  </div>
              </div>
              <div class="form-group">        
                  <label class="control-label col-sm-2" for="role">Role:</label>
                  <div class="col-sm-10">          
                      <select class="form-control" id="role" style="width:auto">
                          <option value="user">User</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">        
                  <label class="control-label col-sm-2" for="status">Status:</label>
                  <div class="col-sm-10">          
                      <select class="form-control" id="status" style="width:auto">
                          <option value="1">Active</option>
                          <option value="0">Un Active</option>
                      </select>
                  </div>
              </div>
          </form>
    </div>
    <div class="modal-footer">
      <button id="submit" type="submit" class="btn btn-default">Submit</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>

<div id="deleteModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Delete Job</h4>
    </div>
    <div class="modal-body">
      <p>Are you sure delete this job?</p>
    </div>
    <div class="modal-footer">
      <button id="delete" type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<div id="resetModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Reset password</h4>
    </div>
    <div class="modal-body">
    <form class="form-horizontal" >
              <div class="form-group">
                  <label class="control-label col-sm-2" for="changepassword">Password:</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="changepassword" placeholder="password" name="password">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="repassword">RePassword:</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="repassword" placeholder="repassword" name="repassword">
                  </div>
              </div>
          </form>
    </div>
    <div class="modal-footer">
      <button id="change" type="button" class="btn btn-danger">Change Password</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<script>
  var isEdit=false;
  var username;
  $(document).ready(function() {

      $('#change').on('click',function(){

          $.ajax({
              type:'POST',
              url:'{{URL::to('/')}}/admin/user/change',
              data:{
                  '_token': '<?php echo csrf_token() ?>',
                  username : username,
                  repassword : $('#repassword').val(),
                  password : $('#changepassword').val()
              },
              success:function(data){
                  if(!data.msg==='success'){alert(data.msg);}else{
                    $('#userModal').modal('hide');
                     reload();
                  }
              },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
          });
      });
      $('#delete').on('click',function(){

          $.ajax({
              type:'POST',
              url:'{{URL::to('/')}}/admin/user/delete',
              data:{
                  '_token': '<?php echo csrf_token() ?>',
                  username : username
              },
              success:function(data){
                  if(!data.msg==='success'){alert(data.msg);}else{
                    $('#userModal').modal('hide');
                     reload();
                  }
              },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
          });
      });
          $('#submit').on('click',function(){
              if(isEdit){
                  $.ajax({
                      type:'POST',
                      url:'{{URL::to('/')}}/admin/user/edit',
                      data:{
                          '_token': '<?php echo csrf_token() ?>',
                          username : username,
                          password: $('#password').val(),
                          email: $('#email').val(),
                          role: $('#role').val(),
                          status: $('#status').val()
                      },
                      success:function(data){
                          if(!data.msg==='success'){alert(data.msg);}else{
                            $('#userModal').modal('hide');
                             reload();
                          }
                      },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
                  });
              }else{
                  $.ajax({
                      type:'POST',
                      url:'{{URL::to('/')}}/admin/user/create',
                      data:{
                          '_token': '<?php echo csrf_token() ?>',
                          username : $('#username').val(),
                          password: $('#password').val(),
                          email: $('#email').val(),
                          role: $('#role').val(),
                          status: $('#status').val()
                      },
                      success:function(data){
                          if(!data.msg==='success'){alert(data.msg);}else{
                            $('#userModal').modal('hide');
                             reload();
                          }
                      },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
                  });
              }
          });
  });
  $('#userBody').on('click', '.display_modal',function(){
    $('#repassword').val('');
    $('#changepassword').val('');
      $('#status').val('1');
      $('#email').val('');
      $('#role').val('admin');
      $('#username').val('');
      if($(this).attr('action')=='add') {
          $('#modal_title').text('Add new User');
          isEdit=false;
          username = 0;
          $('#userModal').modal();
          $('#password_form').show();
      }else if($(this).attr('action')=='edit'){
          $('#modal_title').text('Edit User');
          isEdit=true;
          username = $(this).attr('username');
          $('#password_form').hide();
          $.ajax({
              type:'POST',
              url:'{{URL::to('/')}}/admin/user/view',
              data:{
                  '_token': '<?php echo csrf_token() ?>',
                  username: username,
              },
              success:function(data){
                  $('#username').val(data.user.username);
                  $('#email').val(data.user.email);
                  $('#role').val(data.user.role);
                  $('#status').val(data.user.status);
              },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
          });
          $('#userModal').modal();
      }else if($(this).attr('action')=='delete'){
          username = $(this).attr('username');
      }else if($(this).attr('action')=='reset'){
          username = $(this).attr('username');
      }
  });
  function reload(){
      $.ajax({
          type:'POST',
          url:'{{URL::to('/')}}/admin/user/search',
          data:{
              '_token': '<?php echo csrf_token() ?>'
          },
          success:function(data){
              $('#userTable').empty();
              if(data.users && data.users.length >0){
                  var users = data.users;
                  var html = '';
                  for(var i = 0; i< users.length; i++){
                      html +='<tr><td>';
                      html += users[i].username;
                      html +='</td><td>';
                      html += users[i].email;
                      html +='</td><td>';
                      html += users[i].role;
                      html +='</td><td>\n<a action="reset" username="';
                      html +=users[i].username;
                      html += '" class="btn btn-primary display_modal" data-toggle="modal" data-target="#resetModal">Change Password</a>\n<a action="edit" username="';
                      html +=users[i].username;
                      html +='" class="btn btn-warning display_modal">Edit</a>\n<a action="delete" username="';
                      html +=users[i].username;
                      html +='" class="btn btn-danger display_modal" data-toggle="modal" data-target="#deleteModal">Delete</a>\n</td></tr>';
                  }
                  $('#userTable').append(html);
              }

          }
      });
  }

</script>
@endsection