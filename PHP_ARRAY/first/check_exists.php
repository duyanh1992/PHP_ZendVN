<?php
$arr = array('course'=>'PHP', 'chapter'=>'1', 'HTML', 'CSS');
print_r($arr);
echo "<br />";

//check key exists:
$key_exist = array_key_exists('chapter',$arr);
echo $key_exist;

//check value exists:
$value_exist = in_array('HTML1',$arr);
echo $value_exist;
?>