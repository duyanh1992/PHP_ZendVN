<?php
$arr1 = array('2'=>'GGG','3'=>'dEf','4'=>'GGG');
$arr2 = array('1','abc','GGG');

print_r($arr1);
echo "<br />";
print_r($arr2);
echo "<br />";

// show elements have values both appear in arr1 and arr2:
$newArr = array_intersect($arr1,$arr2);
print_r($newArr);
echo "<br />";

// show elements have keys both appear in arr1 and arr2:
$newArr2 = array_intersect_key($arr1,$arr2);
print_r($newArr2);
echo "<br />";

// show element have key and value both appear in arr1 and arr2:
$newArr3 = array_intersect_assoc($arr1,$arr2);
print_r($newArr3);
?>