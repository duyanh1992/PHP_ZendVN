<?php
$arr1 = array('one'=>'HTML','TWO'=>'CSS','three'=>'PHP');
$arr2 = array('ONE'=>'HTML','TWO'=>'css','THREE'=>'NODEJS');

// show elements have keys both appear in arr1 and arr2:
$newArr = array_intersect_key($arr1, $arr2);
print_r($newArr);  // ('TWO'=>'CSS')
?>
