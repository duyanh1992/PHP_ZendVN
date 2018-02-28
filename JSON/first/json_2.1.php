<!-- Convert JSON between PHP and Javascript -->
<?php
$arr3 = array(
                array("id"=>'1', "name"=>"HTML/CSS"),
                array("id"=>'2', "name"=>"PHP")
             );
$endcoded_arr = json_encode($arr3);
//$str = 'This is a test';
?>
<html>
<body>
<script src="../js/json2.js"></script>    
<script type="text/javascript">
//   document.write(str);
    var str = '<?php echo $endcoded_arr ?>';
    var myObject = JSON.parse(str);
    console.log(myObject);
</script>		
</body>	
</html>