<?php
$qu = 'http://210.245.126.171/Music/Nhactre/Tinhyeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma';

//Get a string including indispensable info:

	//Use this function to add space into position str:
	function addSpace($str){
		$s = $str[0];
		for($i=1;$i<strlen($str);$i++){
			if(ctype_upper($str[$i]) == true){
				$s.= ' '.$str[$i];
			}
			else{
				$s.= $str[$i];
			}
		}
		return $s;
	}

	//First way:
	function getSection1($str){
		//Get position of mark '/', from the right of original string:
		$pos = strripos($str, '/');
		
		// Get string section in $str, from $pos to the last character of $str
		return $s = substr($str, $pos+1);	
	}
	
	//Second way:
	function getSection2($str){
		// Split $str to array (by mark '/'):
		$arr = explode('/', $str);
		
		// get the last array element :
		return $s = $arr[count($arr) - 1];
	}
	
	//Third way:
	function getSection3($str){
		// Use parse_url function:
		$info = parse_url($str);
		
		// Split $str to array (by mark '/'):
		$arr = explode('/', $info['path']);
		
		// get the last array element :
		return $arr[count($arr) - 1];
		
	}
	
	$lastStr = getSection3($qu);
	$lastArr = explode('_', $lastStr);
	
	$str2 = explode('.', $lastArr[3]);
	
	$lastArr[1] = addSpace($lastArr[1]);
	$lastArr[2] = addSpace($lastArr[2]);
	$lastArr[3] = addSpace($str2[0]);
	$lastArr[4] = addSpace($str2[1]);
	
	echo "<pre>";
	print_r($lastArr);
	echo "</pre>";
?>