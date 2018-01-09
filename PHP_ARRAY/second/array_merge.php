<?php
$arr = array(1,2,3,4,5);
$arr1 = array(6,7,8);

$newArr = array_merge($arr1, $arr);
print_r($newArr);				//( [0] => 6 [1] => 7 [2] => 8 [3] => 1 [4] => 2 [5] => 3 [6] => 4 [7] => 5 ) 
?>