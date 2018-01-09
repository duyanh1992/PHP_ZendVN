<?php
$arr = array('course'=>'PHP', 'chapter'=>'1', 'HTML', 'CSS');
print_r($arr);
echo "<br />";

// get one key:
$newArray = array_rand($arr);
echo ($newArray)."<br />";

// get many key:
$newArray2 = array_rand($arr, 2);
print_r($newArray2);
?>