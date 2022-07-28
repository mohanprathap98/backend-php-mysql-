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
			margin: 50px;
			width: 500px;
			height: 550px;
			box-shadow: 3px 4px 4px 5px;
			margin-left: 500px;
			background: linear-gradient(to top,#D2B48C,#BC8F8F)
		}
		input
		{
			margin: 20px;
			width: 300px;
			height: 40px;
			border-style:none;
			
		}
		.po
		{
			margin:50px;
		}
		button
		{
			width: 300px;
			margin: 20px;
			height: 50px;
			border-style: none;
			background-color: #58D68D ;
			color: white;
			text-decoration:underline;
			border-radius: 10px; 
		}
		#body
		{
			background: linear-gradient(to right,#DB7093,#FF1493)
		}

	</style>
</head>
<body id="body">
	
<form action="admin_config.php" method="POST">
	<div class="box">
	<h1><font face="Times New Roman"><center>Admin</center></font></h1>
	<div class="po">
	<input type="text" name="name" placeholder="Student name"><br>
	<input type="text" name="class" placeholder="Class"><br>
	<input type="text" name="fees" placeholder="Fees amount"><br>
	<input type="text" name="balance" placeholder="Balance fees"><br>
	<button value="submit" style="font-size: 30px;"><font face="Times New Roman">submit</font></button><br>
	<a href="login.php"><h4>Logout</h4></a>
	
</div>	
</div>
</form>
</body>
</html>