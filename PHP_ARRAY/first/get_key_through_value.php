<?php
$arr = array('course'=>'PHP', 'chapter'=>'1', 'HTML', 'CSS');
print_r($arr);
echo "<br />";

// get key:
$key = array_search('PHP',$arr);
echo $key;
?>