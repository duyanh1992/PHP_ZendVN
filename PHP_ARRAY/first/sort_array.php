<?php
$arr = array('PHP', 'AngularJs', 'HTML', 'CSS');
print_r($arr);
echo "<br />";

// sort array value:
	// sort in ascending order:
sort($arr);
print_r($arr);
echo "<br />";

	// sort in descending order:
rsort($arr);
print_r($arr);
echo "<br />";





// sort array key:
	// sort in ascending order:
ksort($arr);
print_r($arr);
echo "<br />";

	// sort in descending order:
krsort($arr);
print_r($arr);
echo "<br />";
?>