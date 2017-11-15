@extends('backendtemplate')
@section('title', 'Product')
@section('username')
    <span>{{$username}}</span>
@endsection
@section('content')
<div id="productBody" class="container" style="padding-top: 20px; max-width:970px">
    <h2>Product</h2>
    <a action="add" class="btn btn-primary display_modal">Add New</a>
    
    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th style="width: 170px">Action</th>
        </tr>
        </thead>
        <tbody id="productTable">
            @foreach ($products as $product)
                <tr>
                    <td> {{ $product->title }}</td>
                    <td> {{ $product->category }}</td>
                    <td>
                    <a action="view" productId="{{ $product->id }}" class="btn btn-primary display_modal" data-toggle="modal" data-target="#viewModal">
                        View</a>
                    <a action="edit" productId="{{ $product->id }}" class="btn btn-warning display_modal">
                        Edit</a>
                    <a action="delete" productId="{{ $product->id }}" class="btn btn-danger display_modal" data-toggle="modal" data-target="#deleteModal"
                    @if ( !($product->is_delete)) 
                        disabled="disabled"
                    @endif 
                    >
                        Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
<div id="productModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width:1050px!important">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal_title" class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
			<form class="form-horizontal" action="/action_page.php">
				<div class="form-group">
					<label class="control-label col-sm-2" for="category">Category:</label>
					<div class="col-sm-10">
                        <select class="form-control" id="category" style="width:auto">
							<option value="1">Sản Phẩm</option>
							<option value="2">Dịch Vụ</option>
							<option value="3" selected>Dự Án Nổi Bật</option>
                            <option value="4">Giới thiệu</option>
                            <option value="5">Tin tức</option>
						</select>
					</div>
				</div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="title">Title:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="title" placeholder="title" name="title">
					</div>
                </div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="disImg">Display image:</label>
					<div class="col-sm-10">
                        <span class="btn btn-default btn-file" style="vertical-align: top !important">
                            Upload display image <input id="disImg" type="file">
                        </span>
                        <img id="img" style="max-height:142.400px">
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="content">Content:</label>
					<div class="col-sm-10">          
                        <div id="content">
                        </div>
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

<div id="viewModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal_title" class="modal-title">View</h4>
      </div>    
      <div class="modal-body">
        <form class="form-horizontal" action="#">
            <div class="form-group">
                <label class="control-label col-sm-2" for="disImg">Display image:</label>
                <div class="col-sm-10">
                    <img id="imgView" style="max-height:242.400px">
                </div>
            </div>
            <div class="form-group">        
                <label class="control-label col-sm-2" for="content">Content:</label>
                <div class="col-sm-10">          
                    <div id="contentView" style="border-radius: 5px;border: 1px solid #d4d4d4;padding: 5px 15px;    box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
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
  
  <script>
  
  var isEdit=false;
  var productId;
  var imageData;
  $(function() {
    $('#content').summernote({
        height: 250,
        maxHeight:250,
		toolbar: [
			['style', ['style']],
			['font', ['bold', 'italic', 'underline', 'clear']],
			['fontname', ['fontname']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			['table', ['table']],
			['insert', ['link', 'picture', 'hr']],
			['view', ['fullscreen']]
		  ]
    });
    $('#datatable').DataTable({
        "order": []
    });
    $('#datatable_length select').css({"display":"inline"});
    $('#datatable_length select').addClass('form-control');
    $('#datatable_filter input').addClass('form-control');
    $('#datatable_filter input').css({"display":"inline","width":"auto"});
  });
  $('#productBody').on('click', '.display_modal',function(){
        $('#category').val('3');
        $('#title').val('');
        $('#content').summernote("code", '');
        imageData = '';
        $('#img').hide();
        if($(this).attr('action')=='view'){
            id = $(this).attr('productId');
            $('#contentView').empty();
            $.ajax({
                type:'POST',
                url:'{{URL::to('/')}}/admin/product/view',
                data:{
                    '_token': '<?php echo csrf_token() ?>',
                    id: id,
                },
                success:function(data){
                   $('#contentView').append(data.product.content);
                   $('#imgView').attr("src", data.product.image);
                },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
            }); 
            
        }
        else if($(this).attr('action')=='add') {
            $('#modal_title').text('Add new Product');
            isEdit=false;
            id = 0;
            $('#submit').show();
            $('#productModal').modal();
            
        }else if($(this).attr('action')=='edit'){
            $('#modal_title').text('Edit Product');
            isEdit=true;
            $('#submit').show();
            id = $(this).attr('productId');
            $.ajax({
                type:'POST',
                url:'{{URL::to('/')}}/admin/product/view',
                data:{
                    '_token': '<?php echo csrf_token() ?>',
                    id: id,
                },
                success:function(data){
                    $('#category').val(data.product.cat_id);
                    $('#title').val(data.product.title);
                    $('#content').summernote("code", data.product.content);
                    $('#img').attr("src", data.product.image);
                    $('#img').show();
                    imageData = data.product.image;
                },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
            });
            $('#productModal').modal();
        }else if($(this).attr('action')=='delete'){
            id = $(this).attr('productId');
        }
    });
    $('#submit').on('click',function(){
        if(isEdit){
            $.ajax({
                type:'POST',
                url:'{{URL::to('/')}}/admin/product/edit',
                data:{
                    '_token': '<?php echo csrf_token() ?>',
                    id : id,
                    catId: $('#category').val(),
                    title: $('#title').val(),
                    content: $('#content').summernote('code'),
                    image: imageData
                },
                success:function(data){
                    if(!data.msg==='success'){alert(data.msg);}
                    else{
                        $('#productModal').modal('hide');
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
                url:'{{URL::to('/')}}/admin/product/create',
                data:{
                    '_token': '<?php echo csrf_token() ?>',
                    catId: $('#category').val(),
                    title: $('#title').val(),
                    content: $('#content').summernote('code'),
                    image: imageData
                },
                success:function(data){
                    if(!data.msg==='success'){alert(data.msg);}else{
                        $('#productModal').modal('hide');
                        reload();
                    }
                },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));
                }
            });
        }
    });
    $('#delete').on('click',function(){
        $.ajax({
            type:'POST',
            url:'{{URL::to('/')}}/admin/product/delete',
            data:{
                '_token': '<?php echo csrf_token() ?>',
                id : id
            },
            success:function(data){
                if(!data.msg==='success'){alert(data.msg);}else{
                    $('#productModal').modal('hide');
                    reload();
                }
            },
            error: function (xhr) {
                alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));
            }
        });
    });
    function reload(){
        $.ajax({
            type:'POST',
            url:'{{URL::to('/')}}/admin/product/search',
            data:{
                '_token': '<?php echo csrf_token() ?>'
            },
            success:function(data){
                $('#datatable').dataTable().fnDestroy();
                $('#productTable').empty();
                if(data.products && data.products.length >0){
                    var products = data.products;
                    var html = '';
                    for(var i = 0; i< products.length; i++){
                        html +='<tr><td>';
                        html += products[i].title;
                        html +='</td><td>';
                        html += products[i].category;
                        html +='</td><td>\n<a action="view" productId="';
                        html += products[i].id;
                        html += '" class="btn btn-primary display_modal" data-toggle="modal" data-target="#viewModal">View</a>\n<a action="edit" productId="';
                        html += products[i].id;
                        html += '" class="btn btn-warning display_modal">Edit</a>\n<a action="delete" productId="';
                        html += products[i].id;
                        html += '" class="btn btn-danger display_modal" data-toggle="modal" data-target="#deleteModal"';
                        if(!products[i].is_delete){
                            html += ' disabled="disabled"'
                        }
                        html +='>Delete</a>\n</td></tr>';
                    }
                    $('#productTable').append(html);
                }
                $('#datatable').DataTable({
                    "order": []
                });
            },
            error: function (xhr) {
                alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));
            }
        });
    }
    $("#disImg").on('change',function(){
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
        }else{
            if (this.files && this.files[0]) {
                if(this.files[0].size>=2097152){
                    alert("size of file must be smaller than 2 MB");
                }else{
                    var FR= new FileReader();
                    
                    FR.addEventListener("load", function(e) {
                        $("#img").attr("src", e.target.result);
                        $('#img').show();
                        imageData = e.target.result;
                    }); 
                    
                    FR.readAsDataURL( this.files[0] );
                }
            }
        }
        
    });
  </script>
@endsection