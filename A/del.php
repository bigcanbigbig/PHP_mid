<?php

	$no=$_GET["no"];
	echo $no;
	include("include.php");
	$del="DELETE FROM user WHERE no=".$no;
	mysqli_query($link,$del);

	header('Location:supervisor.php');

?>