<?php
$user=$_POST['user'];

if($user == 'admin')
{
	header("Location:admin_config.php");
}
else if($user =='staff')
{
	header("Location:staff.php");
}

?>