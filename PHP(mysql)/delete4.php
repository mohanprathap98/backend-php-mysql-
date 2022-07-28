<?php
require("register_base.php");

$id=$_GET['id'];
$result=mysqli_query($con,"DELETE FROM admin WHERE id='$id'");

header("Location:principle.php");
?>