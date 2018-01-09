<?php
$arr = array('1','9','1','3','9','9');
print_r($arr);
echo "<br />";

$appeared_list = array_count_values($arr);
print_r($appeared_list);
?>