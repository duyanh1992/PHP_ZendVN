<?php
// Get file name from path (included extension):
$path = "/files/abcd.txt";
echo basename($path)."<br />";

// Get file name from path(not included extension)
echo basename($path, '.txt')."<br />";

//Get folder name from path:
echo dirname($path)."<br />";

// Get path to file :
echo dirname('C:/xampp/htdocs/php/index.php')."<br />";

//Get info array from path:
$pathinfo = pathinfo($path);
print_r($pathinfo);
echo "<br />";

//Get info we want:
$dirname = pathinfo($path, PATHINFO_DIRNAME);
echo $dirname."<br />";

$basename = pathinfo($path, PATHINFO_BASENAME);
echo $basename."<br />";

$filename = pathinfo($path, PATHINFO_FILENAME);
echo $filename."<br />";

$extension = pathinfo($path, PATHINFO_EXTENSION);
echo $extension."<br />";
?>
