<!-- Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total.  -->

<?php 

$total=0;

for( $i=0;$i< 5;$i++ )
{
		$total = $total + $i;
}
echo $total;


?>