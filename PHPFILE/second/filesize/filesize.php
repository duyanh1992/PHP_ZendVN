<?php
include_once('functions.php');
$filename = '2.mp4';
echo $filesize = filesize($filename)."<br />";

echo round(showSize($filesize), 2);
?>