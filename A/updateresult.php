<?php

	$no=$_POST["no"];
	$Account=$_POST["Account"];
	$Pwd=$_POST["Pwd"];
	$Name=$_POST["Name"];
	$Email=$_POST["Email"];
	$Phone=$_POST["Phone"];

	include("include.php");

	$update="UPDATE user SET Account='$Account',Pwd='Pwd',Name='$Name',Email='$Email',Phone='$Phone' WHERE no=".$no;

	mysqli_query($link,$update);
	echo "更新成功";
?>