<section class="contato">
	<div class="box">
		<h2><?php print $mensagem; ?></h2>
        <form class="w100" method="post" id="form">
            <input type="hidden" name="sitekey" id="sitekey" value="6Lehc_IlAAAAAK7617ohtDnlST0AjHvi9FMfJRcj">
            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

            <div class="row mobile-column">
                <input type="hidden" name="pagina" value="<?php print $pagina; ?>">

                <input type="text" name="nome" placeholder="Nome" maxlength="30">

                <input type="email" name="email" placeholder="E-mail" maxlength="40">

                <input type="text" name="celular" placeholder="Celular" id="numero" maxlength="15">

                <button type="submit" id="enviar" name="enviar">Enviar</button>
            </div>	
        </form>
	</div>
</section>