<?php
echo $str = 'PHP course';
echo "<br />";
echo "<b>Cut string through start position (from left) : </b>".substr($str, 4);
echo "<br />";
echo "<b>Cut string through start position (from left) and amount : </b>".substr($str, 4, 3)."<br />";
echo "<b>Cut string through start position (from right) : </b>".substr($str, -1)."<br />";
echo "<b>Cut string through start position (from right) and amount : </b>".substr($str, -3, 3)."<br />";
?>