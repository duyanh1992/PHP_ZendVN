<?php
$arr1 = array('2'=>'GGG','3'=>'dEf','4'=>'GGG', '5'=>'DUYANH');
$arr2 = array('1','abc','GGG');

print_r($arr1);
echo "<br />";
print_r($arr2);
echo "<br />";

// show elements have values appear in arr1 but don't appeare in arr 2:
$newArr = array_diff($arr1,$arr2);
print_r($newArr);
echo "<br />";

// show elements have keys appear in arr1 but don't appeare in arr 2:
$newArr2 = array_diff_key($arr1,$arr2);
print_r($newArr2);
echo "<br />";

// show element have key and value appear in arr1 but don't appear in arr 2:
$newArr3 = array_diff_assoc($arr1,$arr2);
print_r($newArr3);
?>