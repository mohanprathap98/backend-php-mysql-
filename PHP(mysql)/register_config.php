<?php
require("register_base.php");
$a=$_POST['name'];
$b=$_POST['pass'];
$c=$_POST['type'];

$sql="INSERT INTO `login`(`name`,`pass`,`type`)VALUES('$a','$b','$c')";

if(mysqli_query($con,$sql))
{
	echo "data insert success";
	header("Location:login.php");
}
else
{
	echo "failed";

}



?>