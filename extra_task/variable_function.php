<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<p>Hindi:<input type="number" name="s1"></p><br>
	<p>Gujrati:<input type="number" name="s2"></p><br>
	<p>English:<input type="number" name="s3"></p><br>
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

	$sum=$a+$b+$c;
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