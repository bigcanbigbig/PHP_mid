<?php
	$no=$_GET["no"];
	include("include.php");

	$read="SELECT * FROM user WHERE no=".$no;
	$readresult=mysqli_query($link,$read);
	$result=mysqli_fetch_array($readresult);

	echo "<form action='regresult.php' method='post'>";
	echo "帳號：<input type='text' name='Account'><br/><br/>";
	echo "密碼：密碼：<input type='text' name='Pwd'><br/><br/>";
	echo "名稱：<input type='text' name='Name'><br/><br/>";
	echo 'Email：<input type="text" name="Email"><br/><br/>';
	echo '電話：<input type="text" name="Phone"><br/><br/>';
	echo '<input type="submit" value="修改">
			<input type="reset" value="重填">';
?>