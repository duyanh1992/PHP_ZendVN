<?php
$arr = array('course'=>'PHP', 'chapter'=>'1');
// add element:
$newArr_length = array_unshift($arr,'HTML', 'CSS');
echo ($newArr_length)."<br />"; //newArr's length
print_r($arr);
?>