<?php 
	
    if(isset($_POST['email']) && !empty(($_POST['email']))){

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$celular = $_POST['celular'];
		$renda = $_POST['cboRenda'];

		switch ($renda){
			case 1:
				$mensagem_renda = "Renda familiar entre R$ 1.000,00 - R$ 3.000,00";
				break;
			case 2: 
				$mensagem_renda = "Renda familiar entre R$ 4.000,00 - R$ 6.000,00";
				break;
			case 3: 
				$mensagem_renda = "Renda familiar entre R$ 7.000,00 - R$ 10.000,00";
				break;	
			case 4: 
				$mensagem_renda = "Renda familiar acima que R$ 10.000,00";
				break;		
		}

		$to = "contato@ajfimoveis.com.br";
		$subject = "Contato - AJF IMOVEIS";
		$body = "Nome: ".$nome. "\r\n".
				"Email: ".$email."\r\n".
				"Renda: ".$mensagem_renda."\r\n".
				"Celular: ".$celular;

		$header = "From:contato@ajfimoveis.com.br"."\r\n"
					."Reply-to:".$email."\r\n"
					."X=Mailer:PHP/".phpversion();

		if(mail($to,$subject,$body,$header)){
			echo $html;
		} else {
			echo("<script> alert('Email não pode ser enviado')</script>");
		}

	} else { print "Ocorreu um erro!"; }
?>