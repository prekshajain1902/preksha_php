<!---Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,34--> 
<?php

$f=8;

Echo $a=0 ;
echo $b=1;

for($i=1;$i<=$f;$i++)
{
	$c=$a+$b;
	echo $c;
    $a=$b;
	$b=$c;
}

?>