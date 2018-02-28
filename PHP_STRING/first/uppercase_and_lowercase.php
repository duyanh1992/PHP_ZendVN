<?php
$str1 = "pHP is easy !";
$str2 = "PHP is easy !";
$str3 = "php is easy !";
echo "Source 1:".$str1."<br />";
echo "Source 2:".$str2."<br />";
echo "Source 3:".$str3."<br />";
echo "lower string :".strtolower($str1)."<br />";
echo "upper string :".strtoupper($str1)."<br />";
echo "lower string's first character :".ucfirst($str3)."<br />";
echo "upper string's first character :".lcfirst($str2)."<br />";
echo "upper word's first character of string:".ucwords($str3)."<br />";
?>