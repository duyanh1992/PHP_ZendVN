<?php
$arr = array('1','9','1','3','9','9');
$arr2 = array_count_values($arr);

print_r($arr2);			//( [1] => 2 [9] => 3 [3] => 1 )  
?>