<?php
class Upload{
  private $file_name;
  private $file_tmp_name;
  private $file_extension;
  private $file_size;
  private $upload_dir;
  private $errors;

  public function __construct($fileName){
    $file_info = $_FILES[$fileName];
    // echo "<pre>";
    // print_r($file_info);
    // echo "</pre>";
    $this->file_name = $file_info['name'];
    $this->file_size = $file_info['size'];
    $this->file_tmp_name = $file_info['tmp_name'];
    $this->file_extension = $this->getFileExtension();
  }

  public function getFileExtension(){
    $file_info = pathinfo($this->file_name);
    return $ext = $file_info['extension'];
  }

  public function checkFileExtension($arr){
      if(in_array($this->file_extension, $arr) == false){
        $this->errors[] = 'file extension is not relgular !!!';
      }
  }

  public function checkFileSize($min_size, $max_size){
    if(($this->file_size < $min_size) || ($this->file_size > $max_size)){
      $this->errors[] = 'file size is too big !!!';
    }
  }

  public function setUploadDir($dir){
    if(file_exists($dir)){
      $this->upload_dir = $dir;
    }
    else{
      $this->errors[] = 'Destination path is not correct !!!';
    }
  }

  public function checkCondition(){
    if(count($this->errors) > 0){
      return false;
    }
    return true;
  }

  public function showError(){
    echo "<pre>";
    print_r($this->errors);
    echo "</pre>";
  }

  public function upload(){
    $run = copy($this->file_tmp_name, $this->upload_dir.'/'.$this->ramdomStr().'_'.$this->file_name);
    if($run){
      return true;
    }
    return false;
  }

  function ramdomStr($length=10){
  	// Create a new array including characters form a to z, A to Z, and 0 to 9
  	$arr_char = array_merge(range('a','z'), range('A','Z'), range('0','9'));

  	// Convert that arr to string:
  	$arr_str = implode($arr_char, '');

  	// Shuffle that string:
  	$arr_str = str_shuffle($arr_str);

  	//Cut that string by $length (requested from outside):
  	$arr_str = substr($arr_str, 0, $length);
  	return $arr_str;
  }
}
?>
