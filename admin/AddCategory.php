<?php
	include("includes/connection.php");

	$cname=$_POST['cname'];

	$sql="INSERT into category (catname) values ('$cname')";
	$conn->query($sql);

	header('location:Category.php');

?>