<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">

  <title>Company</title>
  <script src="./js/jquery-3.2.1.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/summernote.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css" >
  <link href="./css/summernote.css" rel="stylesheet">

</head>
<body>
<div class="container">
  <h2>Jobs</h2>
  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#jobModal" style="float: right;">Add New</a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
		<th>Phone</th>
		<th>Email</th>
        <th>Location</th>
		<th>Address</th>
		<th style="width: 147px;">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>company 1</td>
		<td>0987654321</td>
		<td>abc@xyz.com</td>
        <td>HN</td>
		<td>1000</td>
		<td>
			<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#jobModal" >Edit</a>
			<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteJobModal" >Delete</a>
		</td>
      </tr>
    </tbody>
  </table>
</div>

<div id="jobModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
			<form class="form-horizontal" action="/action_page.php">
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" placeholder="name" name="name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="phone">Phone:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="abc@xyz.com" name="email">
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="location">Location:</label>
					<div class="col-sm-10">          
						<select class="form-control" id="location" style="width:auto">
							<option value="1">Hà Nội</option>
							<option value="2">Hồ Chí Minh</option>
							<option value="3">Tokyo</option>
						</select>
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="location">Address:</label>
					<div class="col-sm-10">          
						<input type="text" class="form-control" id="title" placeholder="address" name="title">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="desc">Description:</label>
					<div class="col-sm-10">
						<div id="desc" class="form-control"></div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="benefit">Benefit:</label>
					<div class="col-sm-10">
						<div id="benefit" class="form-control"></div>
					</div>
				</div>
			</form>
      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-default">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="deleteJobModal" class="modal fade" role="dialog">
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
	    <button type="button" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
    $(document).ready(function() {
        $('#benefit').summernote(summernote);
		$('#desc').summernote(summernote);
    });
	var summernote = {
		minHeight: 190,
		toolbar: [
			['style', ['style']],
			['font', ['bold', 'italic', 'underline', 'clear']],
			['fontname', ['fontname']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			['table', ['table']],
			['insert', ['link', 'picture']],
			['view', ['fullscreen']]
		]
	};
</script>
</body>
</html>
