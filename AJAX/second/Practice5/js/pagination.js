$(function(){
	var totalPage = 0;
	var itemPerPage = 4;
	var page = 1;
	
	function loadData(page){
		$.ajax({
			url : 'load_data.php',
			type : 'post',
			dataType : 'json',
			data : {'itemPerPage':itemPerPage, 'page':page, 'action':'list'},
			success : function(res){
				 if(res.length > 0){
					totalPage = res.totalPage;
					$('.show-prd').empty();
					var xhtml = '';
					xhtml+= '<div class="container"><div class="row">';
					
					$.each(res, function(k,v){
						xhtml+= '<div class="col-md-3 text-center prd">';
						xhtml+= '<img src="images/'+v.anh_sp+'" alt="" width="150px" height="200px"/>';
						xhtml+= '<p><b>'+v.ten_sp+'</b></p>';
						xhtml+= '<p style="color:red; font-weight:bold;">'+v.gia_sp+'</p>';
						xhtml+= '</div>';
					}); 
					
					
					xhtml+= '</div></div>';
				 }
				 $('.show-prd').append(xhtml);
			}
		});
		
		if(page == 1){
			$('#prev').attr('disabled', 'disabled');
		}
		else{
			$('#prev').removeAttr('disabled');
		}
		
	}
	
	function clickPrev(page, totalPage){
		//alert(1);
		//console.log(page);
		// if(page != 1){
			// $('#prev').click(function(){
				// page-= 1;
				// loadData(page);
				// $('#pageInfo').text('Show '+(page)+' of '+totalPage);
				// $('#sltPage option[value='+page+']').attr('selected','selected');
			// });
		// }
	}
	
	function clickNext(page, totalPage){
		//console.log(page);
		//console.log(totalPage);
		if(page != totalPage){
			$('#next').click(function(){
				page+= 1;
				loadData(page);
				$('#pageInfo').text('Show '+(page)+' of '+totalPage);
				$('#sltPage option[value='+page+']').attr('selected','selected');
			});
		}
	}
	
	function checkNext(page, totalPage){
		if(page == totalPage){
			$('#next').attr('disabled', 'disabled');
		}
		else{
			$('#next').removeAttr('disabled');
		}
	}
	
	$.ajax({
		url : 'load_data.php',
		type : 'post',
		dataType : 'json',
		data : {'itemPerPage':itemPerPage, 'page':page, 'action':'count'},
		success : function(res){
			//var res2 = JSON.parse(res);
			totalPage = res.totalPage;
			page = res.page;
			$('#pageInfo').text('Show 1 of '+totalPage);
			
			for(var i=1; i<=totalPage; i++){
				$('#sltPage').append('<option value="'+i+'">Page '+i+'</option>');
			}
		}
	});
	
	loadData(page);
	
	$('#sltPage').change(function(){
		var page = $(this).val();
		$.ajax({
			url : 'load_data.php',
			type : 'post',
			dataType : 'json',
			data : {'itemPerPage':itemPerPage, 'page':page, 'action':'count'},
			success : function(res){
				totalPage = res.totalPage;
				page = res.page;
				$('#pageInfo').text('Show '+page+' of '+totalPage);
				
				loadData(page);
				clickPrev(page, totalPage);
				
				clickNext(page, totalPage);
				checkNext(page, totalPage);
			}
		});
	});
	$('#next').click(clickNext(page, totalPage));
	// clickPrev(page, totalPage);
	// checkNext(page, totalPage);
	// clickNext(page, totalPage);
});