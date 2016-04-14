<?php

	include("include.php");

	if(isset($_POST["Account"])){
	$Account=$_POST["Account"];
	$Pwd=$_POST["Pwd"];

	$sql="SELECT * FROM user WHERE Account='$Account' AND Pwd='$Pwd'";
	$result=mysqli_query($link,$sql);
	
	$rows=mysqli_num_rows($result);

	$read="SELECT * FROM user"; 
	$readresult=mysqli_query($link,$read);
	$Result=mysqli_fetch_array($readresult);

	if($rows){
		echo $Result[3]."歡迎回來！<br/>";
		echo "您上次的登入時間為".$Result[7]."<br/>";
		echo "您的登入次數為".$Result[6]."<br/>";
		echo "<a href=''profile.php?no=".$Result[0]."'>修改用戶資料</a>";		
	}else{
		echo "登入失敗，三秒後再試一次";
		//header('refresh:3; url="log.php"');
	}
	}
?>