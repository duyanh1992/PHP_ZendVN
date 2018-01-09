<?php
ob_start();
session_start();
if (isset($_POST['submit'])) {
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
  }

  if (isset($_POST['password'])) {
    $password = md5($_POST['password']);
  }
  if($name != null && $password != null){
    // Show user info:
    $userInfo = parse_ini_file('member.ini');
    if(isset($userInfo[$name])){
      $perUser = array();
      $perUser = explode('|',$userInfo[$name]);

      if ($name == $perUser[0] && $password == $perUser[1]) {
        $_SESSION['name'] = $name;
        $_SESSION['permission'] = true;
        $_SESSION['timeOut'] = time();
      }
    }
  }
}

if (isset($_SESSION['permission']) && $_SESSION['permission'] && isset($_SESSION['timeOut'])) {
  header('location:action.php');
}
else{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
      <input type="text" name="name" value="">
      <input type="password" name="password" value="">
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
<?php
}
?>
