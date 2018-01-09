<?php
$arr1 = array('ONE'=>'HTML','TWO'=>'CSS','three'=>'PHP');
$arr2 = array('ONE'=>'HTML','TWO'=>'css','THREE'=>'NODEJS');

// show elements have keys both appear in arr1 and arr2:
$newArr = array_intersect_assoc($arr1, $arr2);
print_r($newArr);  // ('ONE'=>'HTML')
?>
