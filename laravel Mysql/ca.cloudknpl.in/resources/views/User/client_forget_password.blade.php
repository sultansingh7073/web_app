<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
	<style>
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
/* css class for the login generated errors */

.profilepress-reset-status {
  width: 400px;
  text-align: center;
  background-color: #e74c3c;
  color: #ffffff;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

.memo-reset-success {
   width: 400px;
  text-align: center;
  background-color: #2ecc71;
  color: #ffffff;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

#sc-password {
  background: #f0f0f0;
  width: 400px;
  margin: 0 auto;
  margin-top: 100px;
  margin-bottom: 2%;
  transition: opacity 1s;
  -webkit-transition: opacity 1s;
}

#sc-password h1 {
  background: #3399cc;
  padding: 20px 0;
  font-size: 140%;
  font-weight: 300;
  text-align: center;
  color: #fff;
}

div#sc-password .sc-container {
  background: #f0f0f0;
  padding: 6% 4%;
}

div#sc-password input[type="email"],
div#sc-password input[type="text"],
div#sc-password input[type="password"] {
  width: 92%;
  background: #fff;
  margin-bottom: 4%;
  border: 1px solid #ccc;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 95%;
  color: #555;
}

div#sc-password input[type="submit"] {
  width: 100%;
  background: #3399cc;
  border: 0;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 100%;
  color: #fff;
  cursor: pointer;
  transition: background .3s;
  -webkit-transition: background .3s;
}

div#sc-password input[type="submit"]:hover {
  background: #2288bb;
}
	</style>
</head>
<body>
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong>There were some problems with your input.<br><br>
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	@if(Session::has('success'))
		{{Session::get('success')}}	
	@endif

	@if(Session::has('error'))
		{{Session::get('error')}}
	@endif
	<div id="sc-password">
		<h1>Reset Password</h1>
			<form action="{{ url('client_change_password') }}" method="post">
				{{ csrf_field() }}
			  <div class="sc-container">
				<input type="email" name="old_email" placeholder="Enter Email Address" />
				<input type="submit" value="Get New Password" />
			  </div>
			</form>
	</div>
</body>
</html>
