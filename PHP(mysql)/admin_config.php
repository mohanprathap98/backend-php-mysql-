<?php
require("register_base.php");
$a=$_POST['name'];
$b=$_POST['class'];
$c=$_POST['fees'];
$d=$_POST['balance'];

$sql="INSERT INTO `admin`(`name`,`class`,`fees`,`balance`)VALUES('$a','$b','$c','$d') ";
if(mysqli_query($con,$sql))
{
	echo "connected success";
	header("Location:admin.php");
}
else
{
	echo "failed";
}
?>