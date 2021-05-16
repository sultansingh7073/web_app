<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.one
		{
			position: absolute;
			top: 30%;
			left: 40%;
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
	<form method="post" action="{{ URL('signme') }}">
		{{ csrf_field() }}
		<table align="center" class="one">
			<tr>
				<td>first_name</td>
				<td><input type="text" name="first_name" placeholder="Enter the First Name"></td>
			</tr>
			<tr>
				<td>last_name</td>
				<td><input type="text" name="last_name" placeholder="Enter the Last Name"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="email" name="email" placeholder="Enter the Email"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" placeholder="Enter the Password"></td>
			</tr>
			<tr>
				<td>confirm_password</td>
				<td><input type="password" name="c_password" placeholder="Enter the Confirm Passowrd"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>