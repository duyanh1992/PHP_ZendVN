<?php
$strDate = "17/12/1975 01:02:03";
$date = date_parse_from_format('d/m/Y H:i:s',$strDate);
echo "<pre>";
print_r($date);
echo "</pre>";
?>