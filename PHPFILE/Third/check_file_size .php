<?php
	/*
		1TB = 1024 GB;
		1GB = 1024 MB;
		1MB = 1024 KB;
		1KB = 1024 B;
	*/
	$url = './test/';
	
	if(file_exists($url.'1.mp4')){
		$filesize =  filesize($url.'1.mp4');
		echo $filesize."<br />";
		
		//First way:
		function showFileSize1($filesize){
			switch($filesize){
				case ($filesize <= 1024) :
					return $filesize.' B';
					break;
					
				case ($filesize > 1024 && $filesize <= 1024*1024) :
					return ($filesize/1024).' KB';
					break;

				case ($filesize>1024*1024 && $filesize < 1024*1024*1024) :
					return ($filesize/(1024*1024)).' MB';	
					break;
			}
		}
		echo showFileSize1($filesize);
		echo "<br />";
		// Second way:
		function showFileSize2($filesize, $num=2, $s=' '){
			$arr = array('B', 'KB', 'MB', 'GB', 'TB');
			for($i=0; $i<count($arr);$i++){
				if($filesize > 1024){
					$filesize = $filesize/1024;
				}
				else{
					$unit = $arr[$i];
					break;
				}
			}
			$filesize = round($filesize, $num);
			$result = $filesize.$s.$unit;
			return $result;
		}
		echo showFileSize2($filesize,1);
	}
?>