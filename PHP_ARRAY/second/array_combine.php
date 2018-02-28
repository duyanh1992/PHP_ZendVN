<?php
$arr1 = array('ONE','TWO','THREE');
$arr2 = array('HTML','css','NODEJS');

$newArr = array_combine($arr1, $arr2);
print_r($newArr);  // ( [ONE] => HTML [TWO] => css [THREE] => NODEJS ) 
?>
