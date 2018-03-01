$(function(){
	//var start = 0;
	var itemPerPage = 4;
	var page = 1;
	
	$('.show-prd').load('load_data.php' ,{'itemPerPage':itemPerPage, 'page':page}, function(res){
			var res2 = JSON.parse(res);
			var totalPage = res2.page;
		$('#pageInfo').text('Show 1 of '+res2.totalPage);
	});
	
	$('#sltPage').change(function(){
		var page = $(this).val();
		$.ajax({
			url : 'load_data.php',
			type : 'post',
			data : {'itemPerPage':itemPerPage, 'page':page},
			success : function(res){
				 //$('.show-prd').empty();
				 //$('.show-prd').append(res);
				console.log(res);
			}
		});
	});
});