@extends('layouts.master')


@section('title','Client Details')


@section('content')
<style type="text/css">
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
		 <form method="post" action="{{ url('publish_data') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
			<div class="row">
				<div class="col-25">
				  <label for="country">Select Client :</label>
				</div>
				<div class="col-75">
					 <?php 
                        foreach($edit_doc as $datavalue)
                        {
                        ?>  
						
						<input type="hidden" name="clie_id" value="<?php echo $datavalue->id; ?>">
            <input type="hidden" name="cl_i_d" value="<?php echo $datavalue->client_id; ?>">
						<input type="text" name="client_name" value="<?php echo $datavalue->client_name; ?>">	 
				</div>
			</div>
			<div class="row">
				<div class="col-25">
				  <label for="country">Select Document	 :</label>
				</div>
				<div class="col-75">
					<input type="text" name="select_doc" value="<?php echo $datavalue->doc_name; ?>">
						<?php 
            			}
            			?>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
				  <label for="lname">Upload Document :</label>
				</div>
				<div class="col-75">
					<input type="file" name="image" required>
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

