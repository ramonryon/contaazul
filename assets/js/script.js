$(function(){

	$('.tabitem').on('click', function(){

		$('.activetab').removeClass('activetab');
		$(this).addClass('activetab');

		var item = $('.activetab').index();
		$('.tabbody').hide();
		$('.tabbody').eq(item).show();
	});

	$('.btn-delete').on('click', function(event){
		event.preventDefault();
		bootbox.confirm({
			message: "Tem certeza que deseja excluir?",
			buttons: {
				confirm: {
					label: 'Sim',
					className: 'btn-success'
				},
				cancel: {
					label: 'Não',
					className: 'btn-danger'
				}
			},
			callback: function (result) {
				if(result){
					window.location= $('.btn-delete').attr('href');
				}
			}
		});
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







