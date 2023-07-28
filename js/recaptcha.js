grecaptcha.ready(function () {

	var sitekey = document.getElementById('sitekey').value;

	grecaptcha.execute(sitekey, { action: 'submit' }).then(function (token) {

	// Enviar o token retornado pelo Google para o formulário
	document.getElementById('g-recaptcha-response').value = token;
	});
});

function valida() {
	if(grecaptcha.getResponse() == ""){		
		alert("Marque a caixa");
		return false;
	}
};