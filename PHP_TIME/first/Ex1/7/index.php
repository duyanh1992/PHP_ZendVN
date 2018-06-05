<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="../../css/jquery-ui.css">
  <script src="../../js/jquery-1.12.4.js"></script>
  <script src="../../js/jquery-ui.js"></script>
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
function plusTime($datepicker, $slt, $value){
	$date = date_parse_from_format('d-m-Y', $datepicker);
	switch($slt){
		case 'day' : 
			$dateStamp = mktime(0,0,0,$date['month'],$date['day']+$value,$date['year']);
			break;
			
		case 'month' : 
			$dateStamp = mktime(0,0,0,$date['month']+$value,$date['day'],$date['year']);
			break;
		
		case 'year' : 
			$dateStamp = mktime(0,0,0,$date['month'],$date['day'],$date['year']+$value);
			break;
	}
	$newDate = date('d-m-Y',$dateStamp);
	return $newDate;
}

function minusTime($datepicker, $slt, $value){
	$date = date_parse_from_format('d-m-Y', $datepicker);
	switch($slt){
		case 'day' : 
			$dateStamp = mktime(0,0,0,$date['month'],$date['day']-$value,$date['year']);
			break;
			
		case 'month' : 
			$dateStamp = mktime(0,0,0,$date['month']-$value,$date['day'],$date['year']);
			break;
		
		case 'year' : 
			$dateStamp = mktime(0,0,0,$date['month'],$date['day'],$date['year']-$value);
			break;
	}
	$newDate = date('d-m-Y',$dateStamp);
	return $newDate;
}

if(isset($_POST['submit'])){
	$datepicker = isset($_POST['datepicker']) ? $_POST['datepicker'] : '';
	$slt = isset($_POST['slt']) ? $_POST['slt'] : '';
    $value = isset($_POST['value']) ? $_POST['value'] : '';
    $action = isset($_POST['slt2']) ? $_POST['slt2'] : '';
	
	if($action == 'plus'){
		$newDate = plusTime($datepicker, $slt, $value);
	}
	if($action == 'minus'){
		$newDate = minusTime($datepicker, $slt, $value);
	}
}
?>
<form action="" method="post">
	<p>Date: <input type="text" id="datepicker" readonly="readonly" name="datepicker" value="<?php if(isset($_POST['datepicker'])){echo $datepicker;} ?>"></p>
	<p>Type: 
		<select name="slt" id="">
			<option value="day" <?php echo ((isset($_POST['slt'])) && $_POST['slt'] == 'day') ? 'selected' : ''; ?>>day</option>
			<option value="month" <?php echo ((isset($_POST['slt'])) && $_POST['slt'] == 'month') ? 'selected' : ''; ?>>month</option>
			<option value="year" <?php echo ((isset($_POST['slt'])) && $_POST['slt'] == 'year') ? 'selected' : ''; ?>>year</option>
		</select>	
	</p>
	
	<p>Action: 
		<select name="slt2" id="">
			<option value="plus" <?php echo ((isset($_POST['slt2'])) && $_POST['slt2'] == 'plus') ? 'selected' : ''; ?>>plus</option>
			<option value="minus" <?php echo ((isset($_POST['slt2'])) && $_POST['slt2'] == 'minus') ? 'selected' : ''; ?>>minus</option>
		</select>	
	</p>
	<p>Value: <input type="text" id="value" name="value" value="<?php if(isset($_POST['value'])){echo $value;} ?>"></p>
	<p><?php if(isset($newDate)){ echo $newDate;} ?></p>
	<input type="submit" name="submit" value="OK"/>
</form> 
 
</body>
</html>