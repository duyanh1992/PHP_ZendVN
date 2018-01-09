<?php
$str =  'PHP course';
$str2 = 'PHP course is great!';
$str3 = 'course';

// compare whole string:
echo strcmp($str, $str2)."<br />";
echo substr($str, -6, 5)."<br />";

//compare string section:
echo substr_compare($str, $str2, 0, 10)."<br />";   //= 0 because they are the same
echo substr_compare('cours', 'course', -6, 5);

?>