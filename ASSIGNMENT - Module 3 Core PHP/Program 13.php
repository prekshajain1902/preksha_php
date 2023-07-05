<?php
$num = array (
  array(1,2,3,4,5),
  array(4,5,6,7,8),
  array(7,8,9,10,11)
 
);
    
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 5; $col++) {
    echo "<li>".$num[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>