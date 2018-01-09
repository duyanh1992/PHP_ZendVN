<?php
$a =  8.54321;
$b =  8.1;
$c =  8.9;
echo "round($a) = ".round($a)."<br />";
echo "round($a, 2) = ".round($a,2)."<br />";
echo "round($b, 0, PHP_ROUND_HALF_UP) = ".round($b, 0, PHP_ROUND_HALF_UP)."<br />";
echo "round($b, 0, PHP_ROUND_HALF_DOWN) = ".round($b, 0, PHP_ROUND_HALF_DOWN)."<br />";
echo "<br />";

echo "ceil($b) (nearest and max) = ".ceil($b)."<br />";
echo "floor($c) (nearest and min) = ".floor($b)."<br />";
?>
