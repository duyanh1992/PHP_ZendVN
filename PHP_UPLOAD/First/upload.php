<?php
if ($_FILES['file_input']['name'] != ''){
  $tmp_name = $_FILES['file_input']['tmp_name'];
  $destination = 'files/'.$_FILES['file_input']['name'];
  move_uploaded_file($tmp_name, $destination);
  echo 'Success';
}
?>
