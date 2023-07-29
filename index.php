<!DOCTYPE html>
<?php $raiz = ""; include('user/connsql.php'); ?>
<?php //include('panel/select.php'); ?>
<html lang="pt-br">
<head>
<?php $raiz = ""; include('components/head.php'); ?>
</head>
<body>
<header>
<?php include 'components/header.php';  ?>
</header>
<div class="btn-whats"><a href="https://api.whatsapp.com/send?phone=552195131494">
	<img src="img/whatsapp.png" alt="Fale comigo no whatsapp"></a>
</div>
<section class="banner">
	<div class="imgBx">
		<?php 
			$sql = "SELECT im.id_img_imovel, im.id_imovel, i.nome_imovel"
				." FROM img_imovel im"
				." LEFT JOIN imovel i ON im.id_imovel = i.id_imovel"
				." WHERE tipo_imagem = 1";
			$rs = $conn->query($sql);
			if($rs === TRUE){
				$row = $rs->fetch_assoc();
				print "<img src='img/00" . $row['id_imovel'] . "/00" . $row['id_img_imovel'] . ".jpg' alt='Foto do " . $row['nome_imovel'] . "' class='active'>";

				while($row = $rs->fetch_assoc()){
					print "<img src='img/00" . $row['id_imovel'] . "/00" . $row['id_img_imovel'] . ".jpg' alt='Foto do " . $row['nome_imovel'] . "'>";
				} 
			} else {
				print "<img src='img/ilustration_photo.jpg' alt='Imagem ilustrativa pós não há foto de nenhum imóvel.' class='active'>";
			}
		?>
	</div>
	<div class="contentBx">
		<?php 
			$sql = "SELECT nome_imovel, url_imovel, descricao_imovel"
				." FROM imovel";
			$rs = $conn->query($sql);
			if($rs === TRUE){
				$row1 = $rs->fetch_assoc();
				print "<div class='active'>";
					print "<h2>" . $row1['nome_imovel'] . "</h2>";
					print "<p>" . $row1['descricao_imovel'] . "</p>";
					print "<a href='" . $row1['url_imovel'] . "'>Saiba mais</a>";
				print "</div>";

				while($row1 = $rs->fetch_assoc()){
					print "<div>";
						print "<h2>" . $row1['nome_imovel'] . "</h2>";
						print "<p>" . $row1['descricao_imovel'] . "</p>";
						print "<a href='" . $row1['url_imovel'] . "'>Saiba mais</a>";
					print "</div>";			
				} 
			} else {
				print "<div class='active'>";
					print "<h2>Título do imóvel</h2>";
					print "<p>Descrição do imóvel</p>";
					print "<a href='#'>Saiba mais</a>";
				print "</div>";
			}
		?>
	</div>
	<ul class="controls">
		<li onclick="nextSlide(); nextSlideText();"></li>
	</ul>
</section>
<section class="imoveis" id="imoveis">
	<h2>Principais Lançamentos</h2>
	<div class="swiper mySwiper">
      		<div class="swiper-wrapper">

			  <?php 
				$sql = "SELECT i.id_imovel, i.nome_imovel, i.url_imovel, i.metragem_imovel, i.qtd_quartos, im.id_img_imovel  "
				. " FROM imovel i"
				. " LEFT JOIN img_imovel im ON i.id_imovel = im.id_imovel"
				. " WHERE im.tipo_imagem = 2";
				$rs = $conn->query($sql);
				if($rs === TRUE){
					while($row2 = $rs->fetch_assoc()){
						print "<div class='swiper-slide'>";
							print "<div class='itemBox'>";
								print "<img src='img/00" . $row2['id_imovel'] . "/00" . $row2['id_img_imovel'] . ".jpg' alt='" . $row2['nome_imovel'] . "'>";
								print "<div class='content'>";
									print "<h2>" . $row2['nome_imovel'] . "</h2>";
									print "<p>" . $row2['metragem_imovel'] . "</p>";
									print "<p>" . $row2['qtd_quartos'] . "</p>";
									print "<a href='" . $row2['url_imovel'] . "'>Saiba mais</a>";
								print "</div>";			
							print "</div>";			
						print "</div>";			
					} 
				} else {
					print "<div class='swiper-slide'>";
						print "<div class='itemBox'>";
							print "<img src='img/ilustration_photo.jpg' alt='Imagem ilustrativa pós não há foto de nenhum imóvel.'>";
							print "<div class='content'>";
								print "<h2>Nome imóvel</h2>";
								print "<p>m²</p>";
								print "<p>Quartos</p>";
								print "<a href='#'>Saiba mais</a>";
							print "</div>";			
						print "</div>";			
					print "</div>";	
				}
			?>
      	</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
  	</div>
</section>
<section class="about">
	<div class="imgSidebar">
		<img src="img/AJF.jpg" alt="Foto do corretor dono do AJF.">
	</div>
	<div class="contentSx">
		<div>
			<h4><span>AJF</span> Imóveis</h4>
			<h2>Anderson Justino Ferreira</h2>
			<p>Sou um corretor de imóveis altamente qualificado e experiente, <b>com uma sólida reputação no mercado imobiliário.</b> Sou conhecido por minha capacidade de entender as necessidades e desejos dos meus clientes, e por oferecer um serviço personalizado e profissional. Com uma vasta rede de contatos e uma compreensão profunda do mercado imobiliário local, sou capaz de ajudar meus clientes a <b>encontrar a propriedade perfeita para sua necessidade.</b></b> Sou altamente comprometido em fornecer um atendimento excepcional e é amplamente respeitado por minha ética de trabalho, integridade e transparência. Comigo, Anderson Justino Ferreira, <b>você pode ter certeza de que está em boas mãos para comprar ou vender um imóvel.</b></p>
			<h4>CRECI 35113-RJ</h4>
		</div>
	</div>
</section>
<section class="info">
	<div class="main-container">
	  <div class="heading">
	    <h1 class="heading_title">Morar no centro do Rio</h1>
	    <p class="heading_credits"><span class="heading_link">tem mais vantagens do que você imagina.</span></p>
	  </div>
	  <div class="cards">
	    <div class="card">
				<div class="card_icon"><i class="fa-solid fa-masks-theater"></i></div> 
				<h2 class="card_title">Serviços e Lazer
				</h2>
				<p>Morar no centro do Rio de Janeiro permite fácil acesso a uma grande variedade de serviços e opções de lazer. <b style="color: var(--laranja);">Há uma grande variedade de restaurantes, cafés, bares e lojas que atendem a uma ampla gama de gostos e orçamentos</b>. Além disso, existem muitos pontos turísticos históricos e culturais na região, como o Museu Nacional de Belas Artes, a Biblioteca Nacional e o Teatro Municipal.</p>
	    </div>
	    <div class="card">
				<div class="card_icon"><i class="fa-solid fa-bus"></i></div>
				<h2 class="card_title">Facilidade de transporte
				</h2>
				<p>Os lançamentos da região são bem servidos por <b style="color: var(--laranja);">transporte público incluindo metrô, ônibus, trem e VLT na porta</b>, o que torna fácil se locomover pela cidade. Além disso, muitas empresas têm suas sedes no centro da cidade, o que significa que é possível chegar ao trabalho facilmente, sem precisar se deslocar por grandes distâncias.</p>
	    </div>
	    <div class="card">
				<div class="card_icon"><i class="fa-solid fa-building-circle-check"></i></div>
				<h2 class="card_title">Infraestrutura completa.
				</h2>
				<p>Como uma das áreas mais desenvolvidas e importantes da cidade, o centro do Rio de Janeiro possui uma infraestrutura completa.<b style="color: var(--laranja);"> Há muitos hospitais, clínicas, escolas, universidades e centros de compras na região, tornando a vida mais conveniente e permitindo fácil acesso a serviços importantes.</b> Além disso, o centro da cidade é muito bem policiado, o que torna a região mais segura e tranquila para os moradores.</p> 
	  	</div>
	  	<div class="card">
				<div class="card_icon"><i class="fa-solid fa-check-double"></i></div>
				<h2 class="card_title">Retorno sobre o investimento.
				</h2>
				<p>O retorno sobre o investimento em imóveis no centro do Rio de Janeiro pode ser uma opção atrativa para os investidores. <b style="color: var(--laranja);">O centro da cidade é uma área de grande importância histórica, cultural e comercial, o que pode contribuir para a valorização dos imóveis nessa região.</b></p> 
	  	</div>
	  	<div class="card">
				<div class="card_icon"><i  class="fa-solid fa-building-circle-check"></i></div>
				<h2 class="card_title">Extensão da Zona Sul
				</h2>
				<p><b style="color: var(--laranja);">O centro do Rio de Janeiro, em particular a região da Orla Conde, pode ser considerado uma extensão natural da zona sul da cidade.</b> Essa área da cidade está localizada ao longo da bela orla marítima, estendendo-se desde a Praça Mauá até a Praça XV, abrangendo pontos turísticos famosos, como o Museu do Amanhã e a região portuária revitalizada.</p> 
	  	</div>
		</div>
	</div>
</section>
<?php 
	$mensagem = "Gostou de um imóvel? Deixe seu melhor contato, vou entrar em contato diretamente com você.";
	$pagina = "Inicial";
	include('components/form-contato.php'); 
?>
<?php include('components/footer.php'); ?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lehc_IlAAAAAK7617ohtDnlST0AjHvi9FMfJRcj"></script>
<script src="js/jquery-min.js"></script>
<script src="js/jquery-mask-money.js"></script>
<script src="js/recaptcha.js"></script>
<script src="js/swiper.js"></script>
<script src="js/slide.js"></script>
<script src="js/events.js"></script>
</body>
</html>