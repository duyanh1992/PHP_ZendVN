<?php
$arr = array('course'=>'PHP', 'chapter'=>'1', 'HTML', 'CSS');
print_r($arr);
echo "<br />";

// exchange array:
$newArray = array_flip($arr);
print_r($newArray);
?>