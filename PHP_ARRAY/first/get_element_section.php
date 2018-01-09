<?php
$arr = array('PHP', '1', 'HTML', 'CSS');
print_r($arr);
echo "<br />";

// get element section:
$newArray = array_slice($arr, 2);
$newArray2 = array_slice($arr, 2, 1, false);
$newArray3 = array_slice($arr, 2, 1, true);
print_r($newArray);
print_r($newArray2);
print_r($newArray3);
?>