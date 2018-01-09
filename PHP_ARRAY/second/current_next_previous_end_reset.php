<?php
$arr = array('one'=>'HTML','tWo'=>'CSS','THree'=>'PHP');
print_r($arr);  			//('one'=>'HTML','tWo'=>'CSS','THree'=>'PHP')
echo "<br />";

echo "Current: ".current($arr)."<br />";

echo "Next: ".next($arr)."<br />";
echo "Current: ".current($arr)."<br />";

echo "End: ".end($arr)."<br />";
echo "Current: ".current($arr)."<br />";

echo "Previous: ".prev($arr)."<br />";
echo "Current: ".current($arr)."<br />";

echo "Reset: ".reset($arr)."<br />";
echo "Current: ".current($arr)."<br />";

?>