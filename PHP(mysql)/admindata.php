<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewpointer" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>

</head>
<body>
	<form action=>
		<h1><font face="batang">Students details</font></h1>
<table class="table table-bordered table-striped">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>pass</th>
		<th>type</th>
		<th>update</th>
	</tr>
	<?php
	require("register_base.php");
	$type=$_POST['type'];
	$sql=("SELECT * FROM login WHERE type='$type'");
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result))
	{
		while($row=mysqli_fetch_assoc($result))
		{
		if($row['type'] == 'admin')
		{

			echo "<tr>";

			echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['pass']."</td><td>".$row['type']."</td>";

			echo "<td>
			<button>
			<a href=\"edit.php?id=$row[id]\">Edit</a>
			</button>
			|
			<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('are you sure want to delete')\">Delete</a>
			</td>";
			echo "</tr>";


		}
		else if($row['type'] == 'staff')
		{
			echo "<tr>";

			echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['pass']."</td><td>".$row['type']."</td>";

			echo "<td>
			<button>
			<a href=\"edit.php?id=$row[id]\">Edit</a>
			</button>
			|
			<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('are you sure want to delete')\">Delete</a>
			</td>";



		}
	}
	}
	else
	{
		echo "failed";
	}


	?>

</table>
</form>
</body>
</html>