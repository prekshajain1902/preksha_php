<!-- Write a PHP program to check Leap years between 1901 to 2016 Using
nested if.  -->

<?php 

$startYear = 1901;
$endYear = 2016;

$yearsToCheck = range($startYear, $endYear);

foreach ($yearsToCheck as $year) {
    $isLeapYear = (bool) date('L', strtotime("$year-01-01"));
    if($isLeapYear === true) echo $year . " is a leap year <br>";
    else echo $year . " is not a leap year <br>";
}
?>
