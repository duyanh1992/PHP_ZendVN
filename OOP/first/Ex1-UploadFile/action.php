<?php
require('Upload.php');

$upload = new Upload('file_upload');
die();
$upload->setUploadDir('./img');
$upload->checkFileExtension(array('jpg', 'png', 'jpeg'));
$upload->checkFileSize(51200,3145728);

if($upload->checkCondition()){
  //Start uploading:
  if($upload->upload()){
    echo 'Uploading successful !!!';
  }
  else{
    echo 'There was an error while uploading !!!';
  }
}
else{
  $upload->showError();
}
?>
