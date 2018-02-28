<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
foreach ($_FILES['file_input']['name'] as $key => $value) {
  if ($value != null) {
    require_once('functions.php');
    $checkSize = checkSize($_FILES['file_input']['size'][$key], 100*1024, 5*1024*1024);
    $checkExtension = checkExtension($value, array('jpg', 'png', 'zip', 'mp3'));
    if ($checkSize && $checkExtension) {
      move_uploaded_file($_FILES['file_input']['tmp_name'][$key], 'files/'.$value);
    }
    else{
      echo "ERROR";
    }
  }
}
?>
