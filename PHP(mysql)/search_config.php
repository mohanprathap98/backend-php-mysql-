
<meta charset="utf-8">
	<meta name="viewpointer" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<style type="text/css">
		
	</style>
	<h1><font face="batang">Student Details</font></h1>
<table class="table table-bordered table-striped">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>class</th>
		<th>fees</th>
		<th>balance</th>
		<th>update</th>
	</tr>
<?php
require("register_base.php");
$name=$_POST['name'];

$sql="SELECT * FROM admin WHERE name='$name'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";

		echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['class']."</td><td>".$row['fees']."</td><td>".$row['balance']."</td>";

		echo "<td>
		<button>
		<a href=\"edit1.php?id=$row[id]\"?>Edit</a>
		</button>
		|
		<a href=\"delete1.php?id=$row[id]\" onClick=\"return confirm('are you sure want to delete')\"?>Delete</a>
		</td>";
	}
}
else
{
	echo "search config failed";
}

?>
</table>