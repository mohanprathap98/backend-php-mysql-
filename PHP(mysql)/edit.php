<?php
require("register_base.php");
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$type=$_POST['type'];


	$result=mysqli_query($con,"UPDATE login SET name='$name',pass='$pass',type='$type' WHERE id='$id' ");
	header("Location:principle.php");
}
?>




<!DOCTYPE html>
<?php

$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM login WHERE id='$id'");

while($row=mysqli_fetch_assoc($result))
{
	$a=$row['name'];
	$b=$row['pass'];
	$c=$row['type'];

}

?>
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
		table
		{
			margin: 40px;
		}
		input
		{
			margin: 10px;
			height: 30px;
			border-style: none;

			border-radius: 5px;
		}
		.box
		{
			width: 400px;
			height: 400px;
			margin-left: 400px;
			box-shadow: 2px 4px 4px 2px;
			background: linear-gradient(to right,#D2B4DE ,#AED6F1 );
		}
		#body
		{
			background: linear-gradient(to right,#F5B7B1 ,#A9DFBF );
		}
	</style>

</head>
<body id="body">
	<div class="box">
		<h1><font face="batang"> Edit admin details</font></h1>
<form name="form1" action="edit.php" method="POST">
	<table border="0">
		<tr>
			<td><h3>Name:</h3></td>
			<td><input type="text" name="name" value="<?php echo $a?>"></td>
		</tr>
		<tr>
			<td><h3>Password:</h3></td>
			<td><input type="text" name="pass" value="<?php echo $b?>"></td>
		</tr>
		<tr>
			<td><h3>Type:</h3></td>
			<td><input type="text" name="type" value="<?php echo $c?>"></td>
		</tr>

		<tr>
			<td><input type="hidden" name="id" value="<?php echo $_GET['id']?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Update"></td>
		</tr>
		
	</table>
	
</form>
</div>
</body>
</html>