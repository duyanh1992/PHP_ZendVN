<?php
$arr = array(1,'one'=>'PHP',3,"two"=>"HTML/CSS");

$newArr = array_reverse($arr);
print_r($newArr);			//( [two] => HTML/CSS [0] => 3 [one] => PHP [1] => 1 ) 
?>