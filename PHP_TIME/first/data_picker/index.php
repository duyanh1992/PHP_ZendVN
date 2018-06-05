<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <script src="../js/jquery-1.12.4.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
		dateFormat: "dd/mm/yy",
		changeYear : true,
		changeMonth : true,
		yearRange : "2000:2020"
		// defaultDate: "-2m"
	});
  } );
  </script>
</head>
<body>
<?php
if(isset($_POST['submit']) && isset($_POST['date'])){
	var_dump($_POST['date']);
}
?>
<form action="" method="post">
	<p>Date: <input type="text" id="datepicker" readonly="readonly" name="date"></p>
	<input type="submit" name="submit" value="OK"/>
</form> 

 
 
</body>
</html>