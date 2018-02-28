<?php
/* Upload file with following condiions:
- Can only upload file with minimumn size is 100KB and maximum size is 5MB
- Allowed extension : jpg, png, zip, mp3
*/
require_once('functions.php');
$checkSize = checkSize($_FILES['file_input']['size'], 100*1024, 5*1024*1024);
$checkExtension = checkExtension($_FILES['file_input']['name'], array('jpg', 'png', 'zip', 'mp3'));
if ($checkSize && $checkExtension) {
  move_uploaded_file($_FILES['file_input']['tmp_name'], 'files/'.$_FILES['file_input']['name']);
}
?>
