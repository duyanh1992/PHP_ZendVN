<?php
require_once('library/PHPMailer.php');

$mail = new PHPMailer(true);

echo "<pre>";
print_r($mail);
echo "</pre>";
?>