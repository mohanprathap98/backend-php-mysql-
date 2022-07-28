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
	<h1><font face="batang"> Student details</font></h1>
<table class="table table-bordered table-striped">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>class</th>
		<th>fees</th>
		<th>balance</th>
	</tr>
	<?php
	require("register_base.php");
$id=$_POST['id'];
$sql="SELECT * FROM admin WHERE id='$id'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";

		echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['class']."</td><td>".$row['fees']."</td><td>".$row['balance']."</td>";

		echo "<td>
		<button>
		<a href=\"edit4.php?id=$row[id]\">Edit</a>
		</button>
		|
		<a href=\"delete4.php?id=$row[id]\" onClick=\"return confirm('are sure want to delete')\">Delete</a>

		</td>";

		echo "</tr>"; 
	}
}
else
{
	echo "failed";
}

?>

</table>
</body>
</html>



