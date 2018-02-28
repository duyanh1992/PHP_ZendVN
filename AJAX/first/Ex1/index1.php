<html>
<head>
	<link rel="stylesheet" href="1.css" type="text/css"/>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div id="content">
		<div id="left-bar">
			<ul>
				<li><a href="index1.php?page_layout=vleague" id="vleague">vleague</a></li>
				<li><a href="index1.php?page_layout=premierleague" id="premierLeague">premierLeague</a></li>
				<li><a href="index1.php?page_layout=ligue1" id="ligue1">ligue1</a></li>
			</ul>	
		</div>
		
		<div id="main">
			<?php
				if(isset($_GET['page_layout'])){
					switch($_GET['page_layout']){
						case 'vleague' : include_once('vleague.php');
						break;
						
						case 'ligue1' : include_once('league1.php');
						break;
						
						case 'premierleague' : include_once('premierleague.php');
						break;
					}	
				}
				else{
					include_once('premierleague.php');
				}
				
			?>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>