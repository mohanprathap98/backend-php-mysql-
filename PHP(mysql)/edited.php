<?php


require("register_base.php");
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$fees=$_POST['fees'];

	$result=mysqli_query($con,"UPDATE admin SET fees='$fees' WHERE id='$id'");
	header("Location:staff.php");
}
?>






<?php

$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM admin WHERE id='$id'");

while($row=mysqli_fetch_assoc($result))
{
	$a=$row['fees'];
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
		input
		{
			width: 100px;
			height: 30px;
			border-style: none;
			border-radius: 4px;
			background: #9FE2BF;

		}
		#body
		{
			background: linear-gradient(to right,#F08080,#008080)
		}

	</style>
</head>
<body id="body">
	<h3>Change only Fees amount</h3>
<form name="form1" action="edited.php" method="POST">
	<table>
		<tr>
			<td><h5>Fees Amount:</h5></td>
			<td><input type="text" name="fees" value="<?php echo $a?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $_GET['id']?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>