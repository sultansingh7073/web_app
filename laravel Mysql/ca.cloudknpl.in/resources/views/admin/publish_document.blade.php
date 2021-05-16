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
  <div class="card-header">
    <h4 class="card-title"><strong>Publish Document</strong></h4>
  </div>   
  <div style="">
      @if(count($errors) >0 )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>  
                        </div>
                    @endif

                    @if(Session::has('success'))

                         {{ Session::get('success') }}

                    @endif     

                    @if(Session::has('error'))

                         {{ Session::get('error') }}

                    @endif
	<div class="container">
		 <form method="post" action="{{ url('bhar_publish_data') }}" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="row">
				<div class="col-25">
				  <label for="country">Select Client :</label>
				</div>
				<div class="col-75">
					<select name="client_list" required >
					  <option value="">--Client List--</option>
						@foreach($data_user as $datavalue)
					  <option value="{{ $datavalue->name }}">{{ $datavalue->name }}</option>
						@endforeach
					</select>
					 @foreach($data_user as $datavalue)
					<input type="hidden" name="cli_id" value="{{ $datavalue->id }}">
					@endforeach
				
				</div>
			</div>
			<div class="row">
				<div class="col-25">
				  <label for="country">Select Document	 :</label>
				</div>
				<div class="col-75">
					<select name="select_document" required >
					  <option value="">--Select Document--</option>
					  @foreach($documtent as $documt)
					  <option value="{{ $documt->doc_name }}">{{ $documt->doc_name }}</option>
					  @endforeach
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
				  <label for="lname">Deposit Amount :</label>
				</div>
				<div class="col-75">
					<input type="file" name="bhar_publish_image" required >
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Publish">
			</div>
		</form>
	</div>
  </div>
    
   </div>
@endsection