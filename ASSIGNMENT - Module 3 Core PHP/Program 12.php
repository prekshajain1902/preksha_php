<!--Write a PHP script which decodes the following JSON string.   -->

<?php
   $json = '{"UK": "London", "ES": "Madrid", "IT": "Rome"}';
   print_r (json_decode($json));
?>