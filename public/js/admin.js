$(document).ready(function() {


	$('form.confirm-destroy').on('submit', function(){
		if (confirm('Tem certeza que deseja excluir este item?')) {
			return true;
		} else {
			return false;
		}
	});


});


