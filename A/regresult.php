<?php
	$Account=$_POST["Account"];
	$Pwd=$_POST["Pwd"];
	$Name=$_POST["Name"];
	$Email=$_POST["Email"];
	$Phone=$_POST["Phone"];
	$LoginTimes=1;

	date_default_timezone_set("Asia/Taipei");
	$nowTime=time("now");
	$LastTime=date('Y-m-d H:i:s',$nowTime);
	$nowTime = strtotime( $LastTime );


	include("include.php");

	$add="INSERT INTO user(Account,Pwd,Name,Email,Phone,LoginTimes,LastTime) VALUES ('$Account','$Pwd','$Name','$Email','$Phone','$LoginTimes','$LastTime')";

	mysqli_query($link,$add);
	
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	</head>
	<body>
		<h1>註冊成功</h1>
		<a href="log.php">回到登入頁面</a>
	</body>
</html>