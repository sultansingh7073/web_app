@extends('layouts.master')


@section('title','Client Registration')



@section('content')
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number]{
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
if(Session::has('error')){ ?>
	<div class="alert alert-danger alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Error!</strong> <?php echo Session::get('error'); ?>
	</div>
<?php } ?>
<div class="content">
  <div class="card-header">
    <h4 class="card-title"><strong>Deposit Amount</strong></h4>
  </div>   
  <div class="container">
	<form method="post" action="{{ url('wallet_update') }}">
					{{csrf_field()}}
					<?php
						  foreach($fetch_all_data as $fet_data)
						  { 
					?>
					<div class="row">
						<div class="col-25">
						  <label for="lname">Client Name :</label>
						</div>
						<div class="col-75">
							<input type="text" name="client_name" value="<?php echo $fet_data->clientname; ?>" required>
							<input type="hidden" name="client_list" value="<?php echo $fet_data->clientid; ?>">
							<input type="hidden" name="request_id" value="<?php echo $fet_data->id; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
						  <label for="lname">Deposit Amount :</label>
						</div>
						<div class="col-75">
						  <input type="number" name="amount" value="<?php echo $fet_data->amt; ?>" required>
						</div>
					</div>
					<div class="row">
						<input type="submit"  value="Deposit">
					</div><?php } ?>
				</form>
		</div>
  </div>
    
    
@endsection