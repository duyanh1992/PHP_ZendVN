<?php
$arr = array('1','9','6','4','8');
print_r($arr);
echo "<br />";

// find max value:
$max = max($arr);
echo "Max: ".($max)."<br />";

// find min value:
$min = min($arr);
echo "Min:".($min)."<br />";
 
// Show array's sum:
echo "Sum: ".array_sum($arr);
?>