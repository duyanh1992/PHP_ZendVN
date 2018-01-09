<?php
$str = "PHP is easy ! PHP";
echo " <b>Source:</b> ".$str."<br />";
echo "<b>a start position of 'is' </b>: ".stripos($str, 'is')."<br/>";
echo "<b>a start position of 'PHP'(last) </b>: ".strripos($str, 'PHP')."<br/>";
?>