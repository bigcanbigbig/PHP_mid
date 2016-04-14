<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		第一個數字：<label><input type="text" name="num1"></input></label><br/>
		第二個數字：<label><input type="text" name="num2"></input></label><br/>
		<select name="class">
			<option value="1">+</option>
			<option value="2">-</option>
			<option value="3">*</option>
			<option value="4">/</option>
		</select><br/>
		<input type="submit" value="計算">
		<input type="reset" value="重填">
	</form><br/>
</body>
</html>
<?php
	function calculate($class,$num1,$num2)  
  	{  
      switch ($class)  
      {  
      case 1:  
          $end = $num1 + $num2;  
      break;  
      case 2:  
          $end = $num1 - $num2;  
          break;  
      case 3:  
          $end = $num1 * $num2;  
          break;  
      default:  
          $end = $num1 / $num2;         
      }  
      return $end;
  	} 
	if(isset($_POST['num1']) and isset($_POST['num2']) and isset($_POST['class']))  
  	{  
  		$numA = $_POST['num1'];  
  		$numB = $_POST['num2'];  
  		$class = $_POST['class'];   
  		$end = calculate($class,$num1,$num2);  
  	}  

  	echo "答案=".$end;

?>