<html>
<meta charset='utf-8'/>
<head>
	<script src= "../js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript">
		var pos = 1;
		$(function(){
			$('#content').load('db.php?pos=0&item=2');
			$('#loadMore').click(function(){
				pos+=1;
				//send pos variable to db.php:
				$.get('db.php',{"pos":pos, "item":1}, function(responseData,status){
					if(responseData.length > 0){
						// join responseData:
						$('#content .box:last').after(responseData);
					}
					else{
						$('#loadMore').remove();
					}
				});
			});
		});
	</script>
</head>
<body>
	<div id="content">
		
	</div>
	<input id="loadMore" type="submit" value="Load more..."/>
</body>
</html>