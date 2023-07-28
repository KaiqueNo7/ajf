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

$('#numero').keyup(function() {
    var tel = $('#numero').val();		  
    tel=tel.replace(/\D/g,"")
    tel=tel.replace(/^(\d)/,"($1")
    tel=tel.replace(/(.{3})(\d)/,"$1) $2")
    if(tel.length == 9) {
        tel=tel.replace(/(.{1})$/,"-$1")
    } else if (tel.length == 10) {
        tel=tel.replace(/(.{2})$/,"-$1")
    } else if (tel.length == 11) {
        tel=tel.replace(/(.{3})$/,"-$1")
    } else if (tel.length == 12) {
        tel=tel.replace(/(.{4})$/,"-$1")
    } else if (tel.length > 12) {
        tel=tel.replace(/(.{4})$/,"-$1")
    }
    $('#numero').val(tel);
});		