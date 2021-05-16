@extends('layouts.master')


@section('title','Client Registration')

@section('content')
<style type="text/css">
    * {
  box-sizing: border-box;
}

input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 0px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  
  padding: 20px;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
<?php 
if(Session::has('success')){ ?>
	<div class="alert alert-success alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Success!</strong> <?php echo Session::get('success'); ?>
	</div>
<?php } ?>

<?php 
if(Session::has('error')){ ?>
	<div class="alert alert-danger alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Error!</strong> <?php echo Session::get('error'); ?>
	</div>
<?php } ?>

					
<div class="content">
 	<div class="testbox">
 		<h4 class="card-title">
  		<strong>Document Type Master</strong>
  	</h4>
			<div class="container">
				<form action="{{ url('document_type_data') }}" method="post">
					{{csrf_field()}} 		
					<div class="row">
						<div class="col-25">
							<label for="lname">Document Name :</label>
						</div>
						<div class="col-75">
							<input type="text" name="doc_name" class="form-control" id="usr" required>
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">Document Cost :</label>
						</div>
						<div class="col-75">
							<input type="text" name="doc_cost" class="form-control numeric" id="usr" required >
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">Urgent Cost :</label>
						</div>
						<div class="col-75">
							<input type="text" name="urgent_cost" class="form-control numeric" id="usr">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname"></label>
						</div>
						<div class="col-75">
							<label class="radio-inline"><input type="radio" name="status" value="1" checked>&nbsp;Active</label>
						<label class="radio-inline"><input type="radio" name="status" value="0">&nbsp;Inactive</label>
						</div>
					</div>
					<div class="row">
						<input type="submit"  value="Submit">
					</div>
					
				</form>
			</div>
	</div> 
					
</div>

<script src="/dashboard/vendor/jquery/jquery.min.js"></script>
<script>
 jQuery(document).ready(function(){
	
	jQuery('.numeric').on('input', function (event) { 
		this.value = this.value.replace(/[^0-9\.\(\)\-]/g,'');
	});
	 
 });
</script>

@endsection