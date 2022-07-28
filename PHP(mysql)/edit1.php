<?php
require("register_base.php");

if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$class=$_POST['class'];
	$fees=$_POST['fees'];
	$balance=$_POST['balance'];

	$result=mysqli_query($con,"UPDATE admin SET name='$name',class='$class',fees='$fees',balance='$balance' WHERE id='$id' ");
	header("Location:principle.php");
}
?>
<?php
$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM admin WHERE id='$id'");

while($row=mysqli_fetch_assoc($result))
{
	$a=$row['name'];
	$b=$row['class'];
	$c=$row['fees'];
	$d=$row['balance'];
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
	
<form name="form1" action="edit1.php" method="POST">
	<div class="box">
		<h1><font face="batang"> Edit Student Details</font></h1>
	<table>
		<tr>
			<td><h2>Name:</h2></td>
			<td><input type="text" name="name" value="<?php echo $a?>"></td>
		</tr>

		<tr>
			<td><h2>class:</h2></td>
			<td><input type="text" name="class" value="<?php echo $b?>"></td>
		</tr>

		<tr>
			<td><h2>fees:</h2></td>
			<td><input type="text" name="fees" value="<?php echo $c?>"></td>
		</tr>

		<tr>
			<td><h2>balance:</h2></td>
			<td><input type="text" name="balance" value="<?php echo $d?>"></td>
		</tr>

		<tr>
			<td><input type="hidden" name="id" value="<?php echo $_GET['id']?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</div>	
</form>
</body>
</html>