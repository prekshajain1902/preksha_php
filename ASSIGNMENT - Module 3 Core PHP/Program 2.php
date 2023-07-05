<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if
else  -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<p>Physics:<input type="number" name="s1"></p><br>
	<p>Chemistry:<input type="number" name="s2"></p><br>
	<p>Biology:<input type="number" name="s3"></p><br>
	<p>Mathematics:<input type="number" name="s4"></p><br>
	<p>Computer:<input type="number" name="s5"></p><br>
    <input type="submit" name="submit" value="click"><br>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$a=$_POST['s1'];
	$b=$_POST['s2'];
	$c=$_POST['s3'];
	$d=$_POST['s4'];
	$e=$_POST['s5'];

	$sum=$a+$b+$c+$d+$e;
	echo "<br>Total =  $sum <br>";

	$g=$sum*100/300;
	echo"<br>Persentage = $g <br>";

	if($g>=70)
	{
		echo"<BR> Distiction Class";
	}
	elseif ($g>=60)
    {
		echo"<BR> First Class";
	}
	elseif ($g>=50) 
	{
		echo"<BR> Second Class";
	}
	elseif ($g>=40) {
		echo"<BR> Pass Class";
	}
	else
	{
		echo"<BR> Fail";
	}
}
?>