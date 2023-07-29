$(document).ready(function() {
	var form = $('#form'); 
	var submit = $('#enviar');  

	form.on('submit', function(e) {
		e.preventDefault();

		$.ajax({
			url: 'sendmail.php', 
				type: 'POST', 
				dataType: 'html', 
				data: form.serialize(), 
				beforeSend: function() {
				submit.html('Enviando..'); 
			},
			success: function(data) {

                submit.html('Enviado!');
                form.trigger('reset');
                window.open('obrigado');
			},
			error: function(e) {
				submit.html('Ocorreu um erro!');
			}
		});
	});
});