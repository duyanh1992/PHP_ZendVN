<?php
$arr1 = array('ONE'=>'HTML','TWO'=>'CSS','THREE'=>'PHP');
$arr2 = array('ONE'=>'HTML','TWO'=>'CSS','FOUR'=>'NODEJS');

// show elements that theirs' values appear in arr1 but don't appear in arr 2:
$newArr = array_diff_assoc($arr1, $arr2);
print_r($newArr);   // ([THREE] => PHP ) 
?>