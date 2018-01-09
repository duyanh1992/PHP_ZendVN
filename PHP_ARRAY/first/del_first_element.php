<?php
$arr = array('course'=>'PHP', 'chapter'=>'1');
print_r($arr);
echo "<br />";
// del first element:
echo $first_element = array_shift($arr);
echo "<br />";

print_r($arr);
echo "<br /><br />";


$arr2 = array('course'=>'PHP', 'chapter'=>'1', 'course2'=>'HTML', 'chapter2'=>'2');
print_r($arr2);
echo "<br />";
//Delete many first elements:
$num =2;
for($i=0;$i<$num;$i++){
	array_shift($arr2);	
}
print_r($arr2);
echo "<br /><br />";
?>