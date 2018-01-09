<?php
ob_start();
session_start();
if (isset($_SESSION['permission']) && $_SESSION['permission'] && isset($_SESSION['name']) && (time()<$_SESSION['timeOut']+20)) {
  echo "Hello ".$_SESSION['name'];
}
else{
  unset($_SESSION['timeOut']);
  header('location:Session1.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="logout.php">LogOut</a>
  </body>
</html>
