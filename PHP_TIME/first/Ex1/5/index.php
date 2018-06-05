<?php
// Tính xem thời gian post bài là bao giờ:
$now = "06/04/2018 00:00:00";
$postTime = "17/04/2018 00:22:00";

//parse time string into date time format:
$now = date_parse_from_format('d/m/Y H:i:s',$now);
$postTime = date_parse_from_format('d/m/Y H:i:s', $postTime);

$distance =mktime($postTime['hour'], $postTime['minute'], $postTime['second'], $postTime['month'], $postTime['day'], $postTime['year'])
          -mktime($now['hour'], $now['minute'], $now['second'], $now['month'], $now['day'], $now['year']) ;

// echo $distance;
// die();		  
switch($distance){
	case (0<$distance && $distance < 60): 
	$res = ($distance == 1) ? $distance." second ago" : $distance." seconds ago";
	break;
	
	case (60 <= $distance && $distance < 3600): 
	$distance = $distance/60;
	$res = ($distance == 1) ? $distance." minute ago" : $distance." minutes ago";
	break;
	
	case (3600 <= $distance && $distance < (24*60*60)): 
	
	$distance = $distance/3600;
	$res = ($distance == 1) ? $distance." hour ago" : $distance." hours ago";
	break;
	
	case ((24*60*60) <= $distance):
	$distance = round($distance/(24*60*60));
	$res = ($distance == 1) ? $distance." day ago" : $distance." days ago";
	break;
	}		  
if(isset($res)){
	echo $res;
}
?>