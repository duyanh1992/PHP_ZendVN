<?php
if (isset($_POST['submit'])) {
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
  }

  if (isset($_POST['password'])) {
    $password = md5($_POST['password']);
  }
  if($name != null && $password != null){
    // //Save name and password into txt file:
    // $filename = 'member.txt';
    // $userinfo = $name.'|'.$password."\n";
    // file_put_contents($filename, $userinfo, FILE_APPEND);

    //Save name and password into ini file:
    $filename = 'member.ini';
    $userdata = "$name = $name|$password\n";
    file_put_contents($filename, $userdata, FILE_APPEND);
  }
}
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
      <input type="submit" name="submit" value="SignUp">
    </form>
  </body>
</html>
