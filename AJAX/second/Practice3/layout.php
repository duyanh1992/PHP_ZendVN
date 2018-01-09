<html>
<meta charset='utf-8'/>
<head>
	<script src= "../js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			var position = 1;
			$('#content').load('db.php?pos=0&item=2');
			
			$('#loadMore').click(function(){
				position+=1;
				$.get('db.php', {"pos":position,"item":1}, function(data, status){
					if(data.length>0){
						$('#content .box:last').after(data);
					}
					else{
						$('#loadMore').remove();
					}
				});
			})
		});
	</script>
</head>
<body>
	<div id="content">
		
	</div>
	<input id="loadMore" type="submit" value="Load more..."/>
</body>
</html>