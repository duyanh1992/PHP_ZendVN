<?php
// xem tháng 4 năm 2017 có ? ngày:
$time = mktime(0,0,0,4,1,2017);
//echo $time;

$totalDays = date('t', $time);
echo $totalDays ;
?>