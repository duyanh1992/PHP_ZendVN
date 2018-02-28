<?php
$arr = array('PHP', '1', 'HTML', 'CSS');
print_r($arr);
echo "<br />";

// del(and replace) element section:
$newArray = array_splice($arr, 2, 1, array(7,8));
print_r($newArray);
echo "<br />";

print_r($arr);
echo "<br />";
?>