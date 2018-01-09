<?php
$arr = array('abc'=>'1','dEf'=>'2','GGG'=>'3');
print_r($arr);
echo "<br />";

$newArr = array_change_key_case($arr,CASE_UPPER);
print_r($newArr);
?>