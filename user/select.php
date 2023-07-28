<?php 
    $url = $_SERVER['REQUEST_URI'];
    $valor = basename($url);
    //$valor = substr($valor, 0, -4);

    $id_imovel = "";
    $nome_imovel = "";
    $descricao_imovel = "";
    $situacao_imovel = "";
    $projeto_imovel = "";
    $planta_imovel = "";
    $valor_imovel = "";
    $qtd_quartos = "";
    $qtd_banheiros = "";
    $metragem_imovel = "";
    $localizacao_imovel = "";
    $id_maps_imovel = "";
    $img_capa = "";
    $img_projeto_left = "";
    $img_planta_left = "";

    $sql = "SELECT * FROM imovel WHERE url_imovel = '" . $valor . "'";

    $rs = $conn->query($sql);

    if($row = $rs->fetch_assoc()){
        $id_imovel = $row['id_imovel'];
        $nome_imovel = $row['nome_imovel'];
        $descricao_imovel = $row['descricao_imovel'];
        $situacao_imovel = $row['situacao_imovel'];
        $projeto_imovel = $row['projeto_imovel'];
        $planta_imovel = $row['planta_imovel'];
        $valor_imovel = $row['valor_imovel'];
        $qtd_quartos = $row['qtd_quartos'];
        $qtd_banheiros = $row['qtd_banheiros'];
        $metragem_imovel = $row['metragem_imovel'];
        $localizacao_imovel = $row['localizacao_imovel'];
        $id_maps_imovel = $row['id_maps_imovel'];
    }

    switch ($situacao_imovel) {
        case '1':
            $situacao_imovel = "LANÇAMENTO";
            break;
        case '2':
            $situacao_imovel = "Últimas unidades";
            break;
        case '3':
            $situacao_imovel = "NA PLANTA";
            break;
    }

    $sql = "SELECT id_img_imovel FROM img_imovel WHERE id_imovel = $id_imovel AND tipo_imagem = 1";
    $rs = $conn->query($sql);

    if($row1 = $rs->fetch_assoc()){
        $img_capa = $row1['id_img_imovel'];
    }

    $img_capa = "00" . $img_capa;

    $sql = "SELECT id_img_imovel FROM img_imovel WHERE id_imovel = $id_imovel AND tipo_imagem = 2";
    $rs = $conn->query($sql);

    if($row2 = $rs->fetch_assoc()){
        $img_projeto_left = $row2['id_img_imovel'];
    }

    $img_projeto_left = "00" . $img_projeto_left;

    $sql = "SELECT id_img_imovel FROM img_imovel WHERE id_imovel = $id_imovel AND tipo_imagem = 4";
    $rs = $conn->query($sql);

    if($row3 = $rs->fetch_assoc()){
        $img_planta_left = $row3['id_img_imovel'];
    }

    $img_planta_left = "00" . $img_planta_left;
?>