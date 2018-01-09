<?php
// Use in string:
$str = "I'm learning PHP";
$str = str_replace('PHP', 'CSS', $str);
echo $str."<br />";    		//I'm learning CSS

//Use in array:
$arr = array('PHP', 'NODEJS');
$arr = str_replace('NODEJS', 'AJAX', $arr);
print_r($arr);  //( [0] => PHP [1] => AJAX ) 
?>