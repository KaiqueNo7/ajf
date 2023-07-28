<?php 
if(!empty($_POST['login'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT login_usuario, senha_usuario "
            . " FROM usuario "
            . " WHERE login_usuario = '" . $usuario . "'"
            . " AND senha_usuario = PASSWORD('" . $password . "')";
    $rs = $conn->query($sql);

    if($row = $rs->fetch_assoc()){
        session_start();
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        return false;
        $alert = "Senha incorreta";
    }
}


?>