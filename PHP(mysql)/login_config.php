<?php
require("register_base.php");
$a=$_POST['name'];
$b=$_POST['pass'];

$sql="SELECT * FROM login WHERE name='$a' AND pass='$b'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result))
{
	$row=mysqli_fetch_assoc($result);
	if($row['type'] == 'admin')
		
	{
		 
		header("Location:admin.php");
	}
	else if($row['type'] == 'staff')
	{
		header("Location:staff.php");

	}
	else if($row['type'] == 'principle')
	{
		header("Location:principle.php");
	}
}
else
{
	echo "failed";
	header("Location:register.php");
}



?>