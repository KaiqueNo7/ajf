<?php 
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if (isset($dados['enviar'])) {
		//var_dump($dados);

		// Iniciar o CURL
		$curl = curl_init();

		// Enviar a requisição
		curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify?secret=". $site_key . "&response=" . $dados['g-recaptcha-response']);

		// Ativar ou desativar a verificação do SSL
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, POSSUI_SSL);

		// Utilizado CURLOPT_RETURNTRANSFER para esperar a resposta da URL
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		// Executar solicitação de curl
		$resposta = curl_exec($curl);

		// Fecha uma sessão cURL e libera todos os recursos
		curl_close($curl);
		//var_dump($resposta);

		// Converter em objeto
		$dados_recaptcha = json_decode($resposta);
		//var_dump($dados_recaptcha);

		if ($dados_recaptcha->success) {
		    echo "Cadastrar no banco de dados<br><br>";
		    if(isset($_POST['email']) && !empty(($_POST['email']))){

				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$celular = $_POST['celular'];
				$pagina = $_POST['pagina'];


				$to = "contato@ajfimoveis.com.br";
				$subject = "Contato - AJF IMOVEIS";
				$body = "Nome: ".$nome. "\r\n".
						"Email: ".$email."\r\n".
						"Pagina: ".$pagina."\r\n".
						"Celular: ".$celular;

				$header = "From:contato@ajfimoveis.com.br"."\r\n"
							."Reply-to:".$email."\r\n"
							."X=Mailer:PHP/".phpversion();

				if(mail($to,$subject,$body,$header)){
					echo $html;
				}else{
					echo("<script> alert('Email não pode ser enviado')</script>");
				}

			} else { print "Ocorreu um erro!"; }
		} else {
		    echo "Erro: Identificado tentativa de e-mail com robô!";
		}
	}
?>