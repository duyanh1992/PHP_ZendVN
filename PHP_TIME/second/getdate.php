<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$getDate = getdate();
echo "<pre>";
print_r($getDate);
echo "</pre>"

/*
Array
(
    [seconds] => 29
    [minutes] => 49
    [hours] => 15
    [mday] => 26
    [wday] => 2
    [mon] => 12
    [year] => 2017
    [yday] => 359
    [weekday] => Tuesday
    [month] => December
    [0] => 1514278169
)
*/
?>