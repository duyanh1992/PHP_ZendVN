<?php
$arr = array('course'=>'PHP', 'chapter'=>'1', 'num'=>'1', 'amount'=>'200');
print_r($arr);
echo "<br />";
// del element:
unset($arr['course']);
print_r($arr);
echo "<br />";

// del many element:
unset($arr['amount'], $arr['chapter']);
print_r($arr);
echo "<br />";

// del array:
unset($arr);
print_r($arr);
?>