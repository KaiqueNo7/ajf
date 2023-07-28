<?php $raiz = ""; include('panel/connsql.php'); ?>
<?php include('panel/select.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>AJF Imóveis | <?php print $nome_imovel; ?></title>
	<?php include'head_imovel.php'; ?>
</head>
<body>
<header>
	<?php include'header.php' ?>
</header>
<section class="banner">
	<div class="imgBx">
	<?php print "<img src='img/00$id_imovel/$img_capa.jpg' alt='$nome_imovel'>"; ?>
	</div>
	<div class="contentBx">
		<div class="info">
			<h2><?php print $nome_imovel; ?></h2>
			<p><?php print $descricao_imovel; ?></p>
			<span class="destaque"><?php print $situacao_imovel; ?></span>
			<a href="https://api.whatsapp.com/send?phone=552195131494" class="destaque">Falar com o corretor</a>
		</div>
	</div>
</section>
<section class="p50" style="background: var(--branco);">
	<div class="swiper mySwiper2">

		<div class="swiper-wrapper">

			<div class="swiper-slide">

				<div class="img-left w30">
					<?php print "<img src='img/00$id_imovel/$img_projeto_left.jpg' alt='$nome_imovel'>"; ?>
				</div>

				<div class="dsc-right w70">
					
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<?php 
								$sql = "SELECT id_img_imovel FROM img_imovel WHERE id_imovel = $id_imovel AND tipo_imagem = 3";
								$rs = $conn->query($sql);
							
								while($row = $rs->fetch_assoc()){
									print "<div class='swiper-slide sombra'>";
										print "<img src='img/00$id_imovel/00" . $row['id_img_imovel'] . ".jpg' alt='$nome_imovel apresentação.'>";
									print "</div>";
								}
							?>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<!--div class="swiper-pagination"></div-->
					</div>

					<div class="dsc-bottom">
						<div class="dsc-text">
							<h2>Projeto</h2>
							<p><?php print $projeto_imovel; ?></p>
						</div>
					</div>

				</div>

				</div>

				<div class="swiper-slide">
					<div class="img-left w30">
					<?php print "<img src='img/00$id_imovel/$img_planta_left.jpg' alt='$nome_imovel'>"; ?>
					</div>

				<div class="dsc-right w70">
					
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<?php 
								$sql = "SELECT id_img_imovel FROM img_imovel WHERE id_imovel = $id_imovel AND tipo_imagem = 5";
								$rs = $conn->query($sql);
							
								while($row = $rs->fetch_assoc()){
									print "<div class='swiper-slide sombra'>";
										print "<img src='img/00$id_imovel/00" . $row['id_img_imovel'] . ".jpg' alt='$nome_imovel apresentação.'>";
									print "</div>";
								}
							?>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<!--div class="swiper-pagination"></div-->
					</div>

					<div class="dsc-bottom">
						<div class="dsc-text">
							<h2>Planta</h2>
							<p><?php print $planta_imovel; ?></p>
						</div>
					</div>
				</div>

				</div>
				<div class="slide-pagination d-flex"></div>
			</div>	
</section>
<section class="js-ard w100 p20 m-column m-center">
	<h1 style="color: var(--laranja);">Apartamentos do <?php print $nome_imovel; ?></h1>
	<div class="box-icon">
		<i class="fa fa-solid fa-bed"></i>
		<h1><?php print $qtd_quartos; ?></h1>
	</div>

	<div class="box-icon">
		<i class="fa fa-solid fa-sink"></i>
		<h1><?php print $qtd_banheiros; ?></h1>
	</div>

	<div class="box-icon">
		<i class="fa fa-regular fa-square-full"></i>
		<h1><?php print $metragem_imovel; ?></h1>
	</div>
</section>
<section class="js-ard m-column p20 text-d" style="background: var(--laranja);">
	<div class="p20 m-center">
		<h2>FALE COM O CORRETOR</h2>
		<p>ONLINE SOBRE O IMÓVEL</p>	
	</div>
	<div class="js-center al-center mobile-column">
		<a href="https://api.whatsapp.com/send?phone=552195131494" class="fale-conosco-btn">WHATSAPP <i class="fa-brands fa-whatsapp"></i></a>
		<a href="https://api.whatsapp.com/send?phone=552195131494" class="fale-conosco-btn">TELEFONE <i class="fa-solid fa-phone"></i></a>
	</div>	
</section>
<section class="js-btw m-column text-l w100 p50">
	<div class="w50">
		<h1><i class="fa-solid fa-location-dot" style="color: var(--laranja);"></i> <?php print $localizacao_imovel; ?></h1>
		<iframe src="<?php print $id_maps_imovel; ?>" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class="w50 text-l p0-20">
		<h2>Localização do <?php print $nome_imovel; ?></h2>
		<?php 
			$sql = "SELECT info_imovel FROM info_imovel WHERE id_imovel = " . $id_imovel; 

			$rs = $conn->query($sql);
			while($row = $rs->fetch_assoc()){
				print "<p>" . $row['info_imovel'] . "</p>";
			}

			$sql = "SELECT referencia_info FROM info_imovel WHERE id_imovel = " . $id_imovel; 

			$rs = $conn->query($sql);
			while($row = $rs->fetch_assoc()){
				print "<ul><li><i class='fa-solid fa-check'></i> " . $row['referencia_info'] . "</li></ul>";
			}
		?>
	</div>
</section>
<?php 

include('calculadora-financiamento.php'); 
$mensagem = "Gostou do <?php print $nome_imovel; ?>? Preencha o formulário, vou entrar em contato diretamente com você.";
$pagina = "<?php print $nome_imovel; ?>";
include'form-contato.php';
include'footer.php'; 
include'js.php';
include'js-send.php'; 

?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
  cssMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  mousewheel: true,
  keyboard: true,
  });

  var menu = ['PROJETO', 'PLANTA']
  var swiper2 = new Swiper(".mySwiper2", {
  	spaceBetween: 30,
  	effect: "fade",
    pagination: {
      el: ".slide-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (menu[index]) + '</span>';
      },
    },
  });
</script>
</body>
</html>