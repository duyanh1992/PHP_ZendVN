<?php
$path = 'files/def.txt';
// Convert file text to array:
$record = file($path);

// Convert file text to string:
$str = file_get_contents($path);
echo $str."<br />";
// Count space:
$space = substr_count('abc sadasd asfafafasf def asfdsadfd ghjibnghf gngf', ' ');

print_r($record);
echo "<br />";

echo $str."<br />";

echo "Số dòng:".count($record)."<br />";
echo "Số từ:".str_word_count($str)."<br />";
echo "Số khoảng trắng:".$space."<br />";
?>
