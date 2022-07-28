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
		background: linear-gradient(to right,#FCF3CF ,#F8C471 );



	}

		
	</style>
	
</head>
<body id="body">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="pencil.jpg" width="100%">
			</div>
			<div class="col-md-6">
			<h1><font face="batang"> Select student name</font></h1>
<form action="select_config.php" method="POST">
	<select name="id">
		<option>--option--</option>
		<?php
		require("register_base.php");

		$result=mysqli_query($con,"SELECT * FROM admin");

		while($row=mysqli_fetch_assoc($result))
		{
			echo "<option value=".$row['id'].">".$row['name']."</option>";
		}
		?>
	</select><br>
	<button value="submit">submit</button>
	<h4><b>குறள் 4:</b></h4>
	<h4><b> வேண்டுதல் வேண்டாமை இலானடி </b></h4>
<h4><b>சேர்ந்தார்க்கு யாண்டும் இடும்பை இல.</b></h4>
</form>
</div>
</div>
</body>
</html>