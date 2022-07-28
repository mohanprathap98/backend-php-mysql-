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
		.box
		{
			margin: 40px;
			width: 400px;
			height: 600px;
			box-shadow: 0px 4px 5px 5px;
			margin-left: 500px;
			padding: 100px;
			background:linear-gradient(to right,#AF7AC5,#AED6F1);

		}
		input
		{
			margin: 10px;
			width: 200px;
			height: 30px;
			border-style:none;
		}
		button
		{
			margin: 10px;
			width: 200px;
			height: 30px;
			background-color: #6495ED;
			border-style: none;
			color: white;
		}
		#body
		{
			background: linear-gradient(to right,#D7BDE2  ,#A9DFBF)
		}
	</style>
</head>
<body id="body">
<form action="login_config.php" method="POST">

	<div class="box">
		<img src="user.jpg" width="100%">
		<h3 style="font-size: 30px;"><font face="Script MT Bold"> User Login</font></h3>
	<input type="text" name="name" placeholder="Enter your name"><br>
	<input type="text" name="pass" placeholder="Enter your password"><br>
	<button value="submit">Login</button>
	
</div>
</form>
</body>
</html>