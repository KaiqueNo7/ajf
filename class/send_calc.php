<?php 
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
?>