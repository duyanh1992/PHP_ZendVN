<?php
$arr = array('course'=>'PHP', 'chapter'=>'1');
print_r($arr);
echo "<br />";
// del last element:
echo $last_element = array_pop($arr);
echo "<br />";

print_r($arr);
echo "<br />";

//Delete many last elements
$arr2 = array('course'=>'PHP', 'chapter'=>'1', 'course2'=>'HTML', 'chapter2'=>'2');
print_r($arr2);
echo "<br />";
//Delete many last elements:
$num =2;
for($i=0;$i<$num;$i++){
	array_pop($arr2);	
}
print_r($arr2);
echo "<br /><br />";
?>