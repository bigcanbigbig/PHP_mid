<?php
	$no=$_GET["no"];
	include("include.php");

	$read="SELECT * FROM record WHERE no=".$no;
	$readresult=mysqli_query($link,$read);
	$result=mysqli_fetch_array($readresult);
	echo "<form action='regresult.php' method='post'>";
?>