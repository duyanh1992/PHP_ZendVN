<?php
$arr1 = array('ONE'=>'HTML','TWO'=>'CSS','THREE'=>'PHP');
$arr2 = array('ONE'=>'HTML','TWO'=>'css','THREE'=>'NODEJS');

// show elements have values both appear in arr1 and arr2:
$newArr = array_intersect($arr1,$arr2);
print_r($newArr);  // ('ONE'=>'HTML')
?>
