<?php
	$no=$_GET["no"];
	include("include.php");

	$read="SELECT * FROM user WHERE no=".$no;
	$readresult=mysqli_query($link,$read);
	$result=mysqli_fetch_array($readresult);

	echo "<form action='updateresult.php' method='post'>";

	echo "<input type='hidden' name='no' id='no' value=".$result[0].">";
	echo "帳號：<input type='text' name='Account' value=".$result[1]."><br/><br/>";
	echo "密碼：密碼：<input type='text' name='Pwd' value=".$result[2]."><br/><br/>";
	echo "名稱：<input type='text' name='Name' value=".$result[3]."><br/><br/>";
	echo "Email：<input type='text' name='Email' value=".$result[4]."><br/><br/>";
	echo "電話：<input type='text' name='Phone' value=".$result[5]."><br/><br/>";
	echo '<input type="submit" value="修改">
			<input type="reset" value="重填">';
	echo "</form>";
	echo "<a href='del.php?no=".$result[0]."'>刪除</a>";
?>