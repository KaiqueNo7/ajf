<?php 
include('connsql.php');

if(!empty($_POST['id_info_imovel'])){
    $id_info_imovel = $_POST['id_info_imovel'];

    $sql = "DELETE FROM info_imovel WHERE id_info_imovel = " . $id_info_imovel;
    $conn->query($sql);
}

if(!empty($_POST['id_imagem'])){
    $id_imagem = $_POST['id_imagem'];
    $id_imovel = $_POST['id_imovel'];

    $arquivo = "../img/00" . $id_imovel . "/00" . $id_imagem . ".jpg";

    if (file_exists($arquivo)) {
        if (unlink($arquivo)) {
            echo "Arquivo excluído com sucesso.";
        } else {
            echo "Ocorreu um erro ao excluir o arquivo.";
        }
    } else {
        echo "O arquivo não existe.";
    }

    $sql = "DELETE FROM img_imovel WHERE id_img_imovel  = " . $id_imagem;
    $conn->query($sql);
}


?>