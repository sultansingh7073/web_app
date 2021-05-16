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
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>Update Registration</strong></h4>
              </div>
              <div class="card-body">
				<div class="container">
						<form action="user_update_data/{{ $client_data->id }}" method="POST">
							{{csrf_field()}}
							<div class="row">
								<div class="col-25">
								  <label for="lname">Name :</label>
								</div>
								<div class="col-75">
									<input type="name" class="form-control" value="{{ $client_data->name }}" placeholder="Enter Name" name="name" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
								  <label for="lname">Mobile :</label>
								</div>
								<div class="col-75">
									<input type="number" class="form-control" value="{{ $client_data->mobile }}" placeholder="Enter Phone" name="mobile" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
								  <label for="lname">Address :</label>
								</div>
								<div class="col-75">
									<input type="text" class="form-control" value="{{ $client_data->address }}" placeholder="Enter Address" name="address" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
								  <label for="lname">city :</label>
								</div>
								<div class="col-75">
									<input type="text" class="form-control" value="{{ $client_data->city }}" placeholder="Enter City" name="city" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
								  <label for="lname">Email :</label>
								</div>
								<div class="col-75">
									<input type="email" class="form-control" value="{{ $client_data->email }}" placeholder="Enter Email" name="email" >
								</div>
							</div>
							<div class="row">
								<input type="submit"  value="Submit">
							</div>
						</form>
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection