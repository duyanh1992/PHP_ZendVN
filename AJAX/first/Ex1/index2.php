<html>
<head>
	<link rel="stylesheet" href="1.css" type="text/css"/>
	<script src= "../js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#main').load('premierLeague.php');
			$('#content #left-bar ul li a#premierleague').toggleClass('addColor');
			//get id name:
			$('#content #left-bar ul li a').click(function(){
				var idName = $(this).attr('id');
				var url = idName + '.php';
				//console.log(url);
				$('#main').load(url);
				$('#content #left-bar ul li *').removeClass('addColor');
				$(this).toggleClass('addColor');
			});
		});	
	</script>
</head>
<body>
	<div id="content">
		<div id="left-bar">
			<ul>
				<li><a href="#" id="vleague">vleague</a></li>
				<li><a href="#" id="premierleague">premierLeague</a></li>
				<li><a href="#" id="league1">ligue1</a></li>
			</ul>	
		</div>
		
		<div id="main"></div>
		<div class="clear"></div>
	</div>
</body>
</html>