<?php
if(isset($_POST['username']) && isset($_POST['password'])){
	$name = $_POST['username'];
	$pass = $_POST['password'];
	
	$msg = array();
	if(empty($name)){
		$msg['name'] = 'Please enter the username !!!';
	}
	else if($name != 'duyanh'){
		$msg['name'] = 'Not found user !!!';
	}
	
	if(empty($pass)){
		$msg['pass'] = 'Please enter the password !!!';
	}
	else if($pass != '1234'){
		$msg['pass'] = 'Password is incorect !!!';
	}
	
	$status = 'error';
	if(count($msg) == 0){
		$status = 'success';
	}
	
	$response = array('status'=>$status, 'message'=>$msg);
	echo $strResponse = json_encode($response);
}

?>