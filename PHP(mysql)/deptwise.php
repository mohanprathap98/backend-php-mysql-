<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewpointer" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>

	<style type="text/css">
	select
	{
		padding: 5px;
		margin: 10px;
		border-style: none;
	}
	button
	{
		padding: 5px;
		margin: 10px;
		height: 30px;
		width: 140px;
		border-style: none;
		background-color: #7DCEA0 ;
		border-radius: 5px;
	}
	img
	{
		padding: 10px;
		margin: 10px;
		border-radius: 20px;
	}
	#body
	{
		background: linear-gradient(to right,#7FB3D5,#F1948A  );



	}

		
	</style>
</head>
<body id="body">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="pen.jpg" width="100%">

			</div>
			<div class="col-md-6">
				<h1><font face="batang">Select department</font></h1>
<form action="admindata.php" method="POST">
	<select name="type">
		<option>--option--</option>
		<option value="admin">Admin</option>
		<option value="staff">Staff</option>
	</select>
	<button value="submit">submit</button>
	<h4><b>குறள் 5:</b></h4> 
	<h4><b>இருள்சேர் இருவினையும் சேரா இறைவன்</b></h4><h4><b> பொருள்சேர் புகழ்புரிந்தார் மாட்டு</b></h4>
</form>
</div>
</div>
</body>
</html>