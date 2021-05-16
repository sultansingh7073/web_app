<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="logout">logout</a>
	@if(Auth::check())
		The User is logged in...
	@endif
</body>
</html>