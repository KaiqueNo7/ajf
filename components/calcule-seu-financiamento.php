<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php $raiz = ""; include'head.php'; ?>
</head>
<style>
	header {
		position: relative;
		background: var(--grey);
	}
</style>
<body>
<header>
<?php include 'header.php';  ?>
</header>
<div class="js-center al-center column p30" style="min-height: 100vh; background: var(--grey);">
	<div class="box-calculadora">
		<div class="w50 p0-30 h100" style="position: relative; overflow: hidden;">
			<form method="post" id="part-1" class="part-1 h100 js-ard column">
				<div class="w100">
					<h2>Primeiro vamos conhecer você!</h2>
					<p>Preencha os dados abaixo para seguir para o financiamento:</p>
				</div>
				
				<div class="w100 js-btw al-start column">
					<label>Nome:</label>
					<div class="inputM-0 w100">
						<input type="text" name="nome" id="nome" placeholder="Nome" required>
					</div>
					<label>Celular:</label>
					<div class="inputM-0 w100">
						<input type="text" name="celular" id="numero" placeholder="Celular" maxlength="15" required>
					</div>
					<label>E-mail:</label>
					<div class="inputM-0 w100">
						<input type="text" name="email" id="email" placeholder="E-mail" required>
					</div>
					<div class="inputM-0 w100">
						<label>Renda famíliar:</label>
						<select name="cboRenda" id="cboRenda" required>
							<option value="">Selecione uma opção</option>
							<option value="1">R$ 1.000,00 - R$ 3.000,00</option>
							<option value="2">R$ 4.000,00 - R$ 6.000,00</option>
							<option value="3">R$ 7.000,00 - R$ 10.000,00</option>
							<option value="4">+ R$ 10.000,00</option>
						</select>
					</div>
				</div>
				<button class="btn-calc w25" type="submit" name="dados" value="dados" id="dados" onclick="nextForm();">Enviar</button>
			</form>

			<form method="post" class="part-2 h100 js-ard column" id="part-2">
				<div class="w100">
					<h2>Calcule o seu financiamento</h2>
					<p>Preencha os campos a baixo e simule as parcelas do seu imóvel:</p>
				</div>
				<div class="w100 js-btw al-start column">
					<label>Valor do imóvel:</label><span>Taxa de 7.9% sobre o imóvel</span>
					<div class="inputM-0 w100">
						<input type="text" name="valor" placeholder="R$ 000.000,000" inputmode="numeric" id="valor">
					</div>
					<label>Valor de entrada:</label>
					<div class="inputM-0 w100">
						<input type="text" name="entrada" placeholder="R$ 000.000,000" inputmode="numeric" id="entrada">
					</div>
					<label>Tempo do financiamento:</label>
					<div class="inputM-0 w100">
						
						<select name="numParcelas" id="numParcelas">
							<option value="">Selecione uma opção</option>
							<option value="120">10 anos</option>
							<option value="240">20 anos</option>
							<option value="360">30 anos</option>
						</select>
					</div>
				</div>
				<div>
					<h1 id="mensagem" class="mensagem">Valor da entrada maior que valor do imóvel.</h1>
					<button class="btn-calc w25" type="button" name="calcula" value="calcula" id="calcula" onclick="calcularFin();">Enviar</button>
				</div>
			</form>
			
		</div>
		<div class="w50 h100 js-center mbl-none fade">
			<img class="img" src="img/01.jpg" alt="Imagem ilustrativa" width="100%" height="100%">
		</div>
	</div>

    <div class="js-center al-center w100">
      <canvas id="myChart" class="myChart"></canvas>
    </div>
	</div>

<!--button class="btn-calc w25" type="button" name="calcular" value="calular" id="calular" onclick="calcularFin();">Calcular</button-->

<?php include('footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="calculadora-financiamento.js"></script>
</body>
</html>