<?php
$strDate = "17/12/1975 01:02:03";
$date = date_parse_from_format('d/m/Y H:i:s',$strDate);
$time = mktime($date['hour'], $date['minute'], $date['second'], $date['month'], $date['day'], $date['year']);
echo date('t', $time);				
?>