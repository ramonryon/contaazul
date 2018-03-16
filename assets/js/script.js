$(function(){

	$('.tabitem').on('click', function(){

		$('.activetab').removeClass('activetab');
		$(this).addClass('activetab');

		var item = $('.activetab').index();
		$('.tabbody').hide();
		$('.tabbody').eq(item).show();
	});


	$('#busca').on('blur', function(){
		setTimeout(function(){
			$('.searchresults').hide();
		}, 400);
		
	});


	$('#busca').on('keyup', function(){
		var datatype = $(this).attr('data-type');
		var q = $(this).val();

		if(datatype != ''){
			$.ajax({
				url:BASE_URL+'ajax/'+datatype,
				type:'GET',
				data:{q:q},
				dataType:'json',
				success:function(json){
					if( $('.searchresults').length == 0){
						$('#busca').after('<div class="searchresults"></div>');
					}

					var html = '';

					for(var i in json){
						html += '<div class="si"><a href="'+json[i].link+'">'+json[i].name+'</a></div>';
					}

					$('.searchresults').html(html);
					$('.searchresults').show();
				}
			});
		}

	});

});

function excluirPermi(id){
	
	$('#modal').find('.modal-body').html('Tem certeza que deseja excluir? <br><div class="buttons"><button class="btn btn-success" onclick="excluirPermission('+id+')">Sim</button><button class="btn btn-danger" onclick="fechar()">Não</button></div>');

	$('#modal').modal('show');
}

function excluirPermission(id){
	$.ajax({
		url:BASE_URL+'permissions/delete/'+id,
		type:'POST',
		data:{id:id},
		success:function(){
			window.location = BASE_URL+'permissions';
		}
	});
}

function excluirPermiGroup(id){
	
	$('#modal').find('.modal-body').html('Tem certeza que deseja excluir? <br><div class="buttons"><button class="btn btn-success" onclick="excluirPermissionGroup('+id+')">Sim</button><button class="btn btn-danger" onclick="fechar()">Não</button></div>');

	$('#modal').modal('show');
}

function excluirPermissionGroup(id){
	$.ajax({
		url:BASE_URL+'permissions/delete_group/'+id,
		type:'POST',
		data:{id:id},
		success:function(){
			window.location = BASE_URL+'permissions';
		}
	});
}

function excluirUs(id){
	
	$('#modal').find('.modal-body').html('Tem certeza que deseja excluir? <br><div class="buttons"><button class="btn btn-success" onclick="excluirUser('+id+')">Sim</button><button class="btn btn-danger" onclick="fechar()">Não</button></div>');

	$('#modal').modal('show');
}

function excluirUser(id){
	$.ajax({
		url:BASE_URL+'users/delete/'+id,
		type:'POST',
		data:{id:id},
		success:function(){
			window.location = BASE_URL+'users';
		}
	});
}

function fechar(){
	$('#modal').modal('hide');
}







