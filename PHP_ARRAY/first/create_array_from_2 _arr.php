<?php
$arr1 = array('abc','dEf','GGG');
$arr2 = array('1','2','3');

print_r($arr1);
echo "<br />";

print_r($arr2);
echo "<br />";

$newArray = array_combine($arr1,$arr2);

print_r($newArray);
?>