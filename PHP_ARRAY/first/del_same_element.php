<?php
$arr = array('course'=>'PHP', 'chapter'=>'1', 'num'=>'1', 'num2'=>'1');
print_r($arr);
echo "<br />";
// del same element:
$arr2 = array_unique($arr);
print_r($arr2);
echo "<br />";
?>