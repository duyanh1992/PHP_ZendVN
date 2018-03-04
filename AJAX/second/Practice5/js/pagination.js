var totalPage = 0;
var itemPerPage = 4;
var page = parseInt(3);

function init(){
	$.ajax({
		url : 'load_data.php',
		async: false,
		type : 'post',
		dataType : 'json',
		data : {'itemPerPage':itemPerPage, 'page':1, 'action':'count'},
		success : function(res){
			//var res2 = JSON.parse(res);
			totalPage = res.totalPage;
			page = res.page;
			
			$('#pageInfo').text('Show 1 of '+totalPage);
			
			for(var i=1; i<=totalPage; i++){
				$('#sltPage').append('<option value="'+i+'">Page '+i+'</option>');
			}
			loadData(page);
		}
	});
}

function loadData(page){
	//alert(page);
	$.ajax({
		url : 'load_data.php',
		type : 'post',
		async: false,
		dataType : 'json',
		data : {'itemPerPage':itemPerPage, 'page':page, 'action':'list'},
		success : function(res){
			 if(res.length > 0){
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
	//alert(page);
}

function clickPrev(old_page){
	if(page != 1){
		page = old_page - 1;
		loadData(page);
		$('#pageInfo').text('Show '+(page)+' of '+totalPage);
		$('#sltPage option[selected="selected"]').removeAttr('selected');
		$('#sltPage option[value='+page+']').attr('selected','selected');
	}
}

function clickNext(old_page){
	if(page != totalPage){
		page = old_page + 1;
		loadData(page);
		$('#pageInfo').text('Show '+(page)+' of '+totalPage);
		$('#sltPage option[selected="selected"]').removeAttr('selected');
		$('#sltPage option[value='+page+']').attr('selected','selected');
	}
}

function checkNext(){
	console.log(totalPage);
	if(page == totalPage){
		$('#next').attr('disabled', 'disabled');
	}
	else{
		$('#next').removeAttr('disabled');
	}
}

function checkPrev(){
	console.log(totalPage);
	if(page == 1){
		$('#prev').attr('disabled', 'disabled');
	}
	else{
		$('#prev').removeAttr('disabled');
	}
}


$(document).ready(function(){
	init();	
	
	$('#sltPage').change(function(){
		page = $(this).val();
		$.ajax({
			url : 'load_data.php',
			type : 'post',
			async: false,
			dataType : 'json',
			data : {'itemPerPage':itemPerPage, 'page':page, 'action':'count'},
			success : function(res){
				page = res.page;
				$('#pageInfo').text('Show '+page+' of '+totalPage);				
				loadData(page);
			}
		});
	});
	
	$('#next').click(function(){		
		clickNext(page);
	});
	$('#prev').click(function(){		
		clickPrev(page);
	});
});