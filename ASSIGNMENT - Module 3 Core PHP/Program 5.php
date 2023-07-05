<!-- Write a program to find whether a number is Armstrong or not Write a
program to print the below format :
5 9
2610
3711
4812  -->

<?php

function isArmstrong($num) {
  $sum = 0;
  $temp = $num;
  $n = strlen($num);
  
  while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $n);
    $temp = (int)($temp / 10);
  }
  
  return $num == $sum;
}

function areArmstrong($nums) {
  foreach ($nums as $num) {
    if (isArmstrong($num)) {
      echo $num . " = is an Armstrong number\n  <br>";
    } else {
      echo $num . " = is not an Armstrong number\n <br>";
    }
  }
}

$nums = array(59, 2610, 3711, 4812);
areArmstrong($nums);

?>