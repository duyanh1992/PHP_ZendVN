<html>
<head>
	<link rel="stylesheet" href="1.css" type="text/css"/>
	<script src= "../js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			//get id name:
			$('#content #left-bar ul li a').click(function(){
				var idName = $(this).attr('id');
				$.ajax({
					url : 'ajaxData.php',
					type : "GET",
					//dataType : 'html',
					data : {'key':idName},
					success : function(responseData, status){
						$('#main').html(responseData);
					}
				});
			});
		});	
	</script>
</head>
<body>
	<div id="content">
		<div id="left-bar">
			<ul>
				<li><a href="#" id="vleague">vleague</a></li>
				<li><a href="#" id="premierLeague">premierLeague</a></li>
				<li><a href="#" id="league1">ligue1</a></li>
			</ul>	
		</div>
		
		<div id="main"></div>
		<div class="clear"></div>
	</div>
</body>
</html>