<?php
$arr = array(4,5,6);

echo "Old length:".count($arr)."<br />";
echo "Old array:";
print_r($arr);
echo "<br />";

$arr_length = array_push($arr, 7,8,9);
echo "New length:".$arr_length."<br />";
echo "New array:";
print_r($arr);
?>