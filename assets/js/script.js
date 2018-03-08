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
					window.location= $().attr('href');
				}
			}
		});
	});

	

});








