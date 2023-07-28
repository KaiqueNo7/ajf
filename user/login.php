<?php $raiz = "../"; include('connsql.php'); ?>
<?php include('valid-login.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('../components/head.php'); ?>
</head>
<body>
<div class="w100 js-btw al-center vh100 grey">
    <div class="w50 vh100 js-center mbl-none">
        <img src="../img/05.jpg"class="img">
    </div>
    <div class="w50 js-center al-center p30 column">
        <img src="../img/logo.png" alt="logo AJF" class="logo-login">
        <form class="w100 p30" method="POST" id="form-login">
            <div class="inputDiv d-flex column m10-0">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario" maxlength="15">
            </div>
            <div class="inputDiv d-flex column m10-0">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" maxlength="15">
            </div>
            <button class="btn-calc w100" type="submit" value="login" name="login" id="login">Entrar</button>
        </form>
    </div>
</div>
</body>
</html>
