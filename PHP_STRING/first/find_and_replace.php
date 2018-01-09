<?php
$str =  'PHP course';
$str2 = 'PHP course is great!';
$str3 = 'course';

$str = str_replace('PHP', 'AJAX', $str);
echo $str."<br />";

//use this function in array:
$arr = array('course'=>'PHP', 'chapter'=>'1');
$arr = str_replace('PHP', "AJAX", $arr);
print_r($arr);
?>