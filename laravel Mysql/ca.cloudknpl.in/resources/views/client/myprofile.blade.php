@extends('layouts.client_master')


@section('title','Client Registration')



@section('content')

<style>
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
  		<h4><strong>My Profile</strong></h4>
			<div class="container">
                <form action="client_update_data" method="POST">	
              	     {{csrf_field()}}
					<?php 
						foreach($profile as $profile)
						{
							?>
					<div class="row">
						<div class="col-25">
						  <label for="lname">Name :</label>
						</div>
						<div class="col-75">
							<input type="text" name="name" class="form-control" id="" required value="<?php echo $profile->name; ?>">
							<input type="hidden" name="id" class="form-control" id="" required value="<?php echo $profile->id; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
						  <label for="lname">Mobile :</label>
						</div>
						<div class="col-75">
						  <input type="text" name="mobile" class="form-control" id="" required value="<?php echo $profile->mobile; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
						  <label for="lname">Address :</label>
						</div>
						<div class="col-75">
						  <input type="text" name="address" class="form-control" id="" value="<?php echo $profile->address; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
						  <label for="lname">City :</label>
						</div>
						<div class="col-75">
						  <input type="text" name="city" class="form-control" id="" value="<?php echo $profile->city; ?>">
						</div>  
					</div>
					<div class="row">
						<div class="col-25">
						  <label for="lname">Email :</label>
						</div>
						<div class="col-75">
						  <input type="text" name="email" class="form-control" id="" value="<?php echo $profile->email; ?>">
			
					
						</div>
					</div>
					<div class="row">
						<div class="col-25">
						  <label for="lname">Password :</label>
						</div>
						<div class="col-75">
						  <input type="password" name="password" class="form-control" id="new_password" placeholder="Enter New  Password" value="">
						</div>  
					</div>
					 <div class="row">
								<div class="col-25">
								  <label for="name">Enter New Confirm Password :</label>
								</div>               

								<div class="col-75">
									<input type="Password" class="form-control" placeholder="Enter New Confirm Password" id="new_c_password" name="new_c_password" >
                  <br>
                   <span style="color:red;" id="error"></span>
								</div>		
					<div class="row">
						<input type="submit"  value="Update" id="formSubmit">
					</div>
				<?php } ?>
                  <br>
                </form>
              </div>
	</div> 
					
</div>
<script src="/dashboard/vendor/jquery/jquery.min.js"></script>
  
<script>
  
jQuery(document).ready(function(){
  jQuery("#formSubmit").click(function(){
    var npassword =  jQuery("#new_password").val();  
    var cpassword =  jQuery("#new_c_password").val();
    if(npassword != cpassword){
      jQuery("#error").html("Note : Password not match");
    return false;
   }
 });
});

</script>       

@endsection