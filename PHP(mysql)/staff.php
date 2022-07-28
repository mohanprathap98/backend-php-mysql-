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
	#body
	{
		background: linear-gradient(to right,#E6B0AA 
,#E59866 )
	}
	select
	{
		width: 150px;
		padding: 5px;
		margin-left: 10px;
		background: #5DADE2 ;
		border-style: none;
	}
	select:hover
	{
		border-style: dotted;
		background: 
	}
	button
	{
		width: 150px;
		margin: 10px;
		background: #7DCEA0 ;
		border-style: none;
		border-radius: 5px;
		height: 30px;


	}

	</style>
</head>
<body id="body">
	<h1><font face="batang"><center><b>Staff Page</b></center></font></h1>
<table class="table table-bordered table-striped">
	<tr>
		<th><center><u><font face="batang" size="5%">Id</font></u></center></th>
		<th><center><u><font face="batang"size="5%">Name</font></u></center></th>
		<th><center><u><font face="batang"size="5%">Class</font></u></center></th>
		<th><center><u><font face="batang"size="5%">Fees</font></u></center></th>
		<th><center><u><font face="batang"size="5%">Balance</font></u></center></th>
	</tr>
	<?php
	require("register_base.php");
	$sql="SELECT * FROM admin ";
	$result=(mysqli_query($con,$sql));

	if(mysqli_num_rows($result))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";

			echo "<td>"."<center>".$row['id']."</center>"."</td><td>"."<center>".$row['name']."</center>"."</td><td>"."<center>".$row['class']."</center>"."</td><td>"."<center>".$row['fees']."</center>"."</td><td>"."<center>".$row['balance']."</center>"."</td>";

			echo "</tr>";
		}
	}
	else
	{
		echo "staff failed";
	}
	?>
</table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="edited.php" method="get">
	<h2><font face="batang">Select student name then change fees/amount;</font></h2><select name="id">
		<option>--option--</option>
		<?php
		require("register_base.php");

		$result=(mysqli_query($con,"SELECT * FROM admin "));

		while($row=mysqli_fetch_assoc($result))
		{
			


			echo "<option value=".$row['id'] .">".$row['name']."</option>";
		}



		?>
	</select><br>
	
<button value="submit">submit</button>
</form>
</body>
</html>