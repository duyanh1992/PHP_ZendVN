<?php
$course = array();
$course[0] = array('id'=>1, 'name'=>'PHP');
$course[1] = array('id'=>2, 'name'=>'HTML/CSS');

/*echo "<pre>";
print_r($course);
echo "</pre>";*/

echo json_encode($course);
?> 