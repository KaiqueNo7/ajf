<!DOCTYPE html>
<html>
	<head>
		<?php include'head_imovel.php'; ?>
		<title>AJF Imóveis | Entre em contato</title>
	</head>
<body>
<header>	
	<?php include 'header.php'; ?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</header>
<section class="banner">
	<div class="imgBx">
		<video src="video/01.mp4" autoplay muted loop type="video/mp3" class="active"></video>
	</div>
	<div class="contentBx">
		<div class="active">
			<h2>Entre em contato</h2>
			<p>Ansioso para conversar com você sobre um imóvel.</p>
			<!--a href="#">Saiba Mais</a-->
		</div>
	</div>
</section>
<section class="cadastro">
	<div class="containerForm">	
		<div class="formBx">
			<form method="post" id="form">
				<h2>Entre em contato</h2>
				<div class="inputBox">
					<input type="text" name="nome" required>
					<span>Nome Completo</span>
				</div>

				<div class="inputBox">
					<input type="email" name="email" required>
					<span>E-mail</span>
				</div>

				<div class="inputBox">
					<input type="tel" name="celular" required>
					<span>Celular</span>
				</div>

				<div class="inputBox">
					<textarea name="mensagem" required></textarea>
					<span>Sua mensagem...</span>
				</div>

				<div class="inputBox">
					<div class="g-recaptcha" data-sitekey="6LegZ_wdAAAAAEeuMxwVsyWt77F7_Xqjid6_4vkR"></div>
				</div>
				<div class="inputBox">
					<button type="submit" id="enviar" name="enviar" onclick="return valida()">Enviar</button>
				</div>
			</form>
		</div>
	</div>
</section>

</body>
</html>
<?php 
	if(isset($_POST['enviar'])) {
		if (!empty($_POST['g-recaptcha-response'])) {	
			$url = "https://www.google.com/recaptcha/api/siteverify";
			$secret = "6LegZ_wdAAAAAHKV8hnCPl-AxHjpmW_Y9NOJXLc8";
			$response = $_POST['g-recaptcha-response'];
			$variaveis = "secret=".$secret."&response=".$response;

			$ch = curl_init($url);
			curl_setopt( $ch, CURLOPT_POST, 1);
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $variaveis);
			curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt( $ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
			$resporta = curl_exec($ch);
			$resultado = json_decode($resposta);
			if ($resultado->success == 1) {
				echo "Continuar o envio do seu form";
			}
		}
	}
?>
<?php include'footer.php'; ?>
<?php include'js-contato.php'; ?>