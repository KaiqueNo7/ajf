<?php 
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
    $url_imovel = "";
    $info_imovel = "";
    $referencia_info = "";

    if(!empty($_POST['seleciona'])){
        $sql = "SELECT * FROM imovel WHERE id_imovel = " . $_POST['cboImovel'];
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
            $url_imovel = $row['url_imovel'];
        }
    }

    if(!empty($_POST['adiciona'])){

        $url_imovel = $_POST['url_imovel'];

        $sql = "SELECT inserir_imovel("
           . "'" . $_POST['nome_imovel'] . "',"
           . "'" . $_POST['descricao_imovel'] . "',"
           . "" . $_POST['situacao_imovel'] . ","
           . "'" . $_POST['projeto_imovel'] . "',"
           . "'" . $_POST['planta_imovel'] . "',"
           . "'" . $_POST['valor_imovel'] . "',"
           . "'" . $_POST['qtd_quartos'] . "',"
           . "'" . $_POST['qtd_banheiros'] . "',"
           . "'" . $_POST['metragem_imovel'] . "',"
           . "'" . $_POST['localizacao_imovel'] . "',"
           . "'" . $_POST['id_maps_imovel'] . "',"
           . "'" . $_POST['url_imovel'] . "'"
        .")";
        print $sql;
        $rs = $conn->query($sql);

        if ($rs === FALSE) {
            echo "Erro ao inserir o registro: " . $conn->error;
        } else {
            $row = $rs->fetch_row();
            $id_imovel = $row[0];
        }

        $dir = '../';
        $nomeArquivo = $url_imovel . '.php';
        $caminhoArquivo = $dir . $nomeArquivo ;
        $conteudo = file_get_contents('modelo.php');

        file_put_contents($caminhoArquivo, $conteudo);

        $nomePasta = '00' . $id_imovel; 

        $caminho = '../img/' . $nomePasta;

        if (!is_dir($caminho)) {
            if (mkdir($caminho, 0777, true)) {
                echo "Imóvel adicionado com sucesso.";
            } else {
                echo "Erro ao criar a pasta.";
            }
        } else {
            echo "A pasta já existe.";
        }

        $htacess = "../.htaccess";
        $url_amigavel = "RewriteRule " . $url_imovel . " ./" . $url_imovel . ".php";

        file_put_contents($htacess, $url_amigavel . PHP_EOL, FILE_APPEND);
        
    }

    if(!empty($_POST['atualiza'])){
        $sql = "UPDATE `imovel` SET "
        . " `nome_imovel`='" . $_POST['nome_imovel'] . "',"
        . " `descricao_imovel`='" . $_POST['descricao_imovel'] . "',"
        . " `situacao_imovel`='" . $_POST['situacao_imovel'] . "',"
        . " `projeto_imovel`='" . $_POST['projeto_imovel'] . "',"
        . " `planta_imovel`='" . $_POST['planta_imovel'] . "',"
        . " `valor_imovel`='" . $_POST['valor_imovel'] . "',"
        . " `qtd_quartos`='" . $_POST['qtd_quartos'] . "',"
        . " `qtd_banheiros`='" . $_POST['qtd_banheiros'] . "',"
        . " `metragem_imovel`='" . $_POST['metragem_imovel'] . "',"
        . " `localizacao_imovel`='" . $_POST['localizacao_imovel'] . "',"
        . " `id_maps_imovel`='" . $_POST['id_maps_imovel'] . "',"
        . " `url_imovel`='" . $_POST['url_imovel'] . "' "
        . " WHERE id_imovel = " . $_POST['id_imovel'];

        if($conn->query($sql) === TRUE){
            //print "Suces";
        } else {
            echo "Erro ao inserir o registro: " . $conn->error;
            //$conn->close();
        }
    }

    if(!empty($_POST['add_info'])){
        $sql = "INSERT INTO info_imovel ("
         ." id_imovel,"
         ." info_imovel,"
         ." referencia_info"
        .") VALUES ("
            . "" . $_POST['id_imovel'] . ","
            . "'" . $_POST['info_imovel'] . "',"
            . "'" . $_POST['referencia_info'] . "'"
        .")";

        if($conn->query($sql) === TRUE){
            //print "Suces";
        } else {
            echo "Erro ao inserir o registro: " . $conn->error;
            //$conn->close();
        }
    }

    if(!empty($_POST['edit_info'])){

        $sql = "UPDATE `info_imovel` SET "
            . " `info_imovel`='" . $_POST['info_imovel'] . "',"
            . " `referencia_info`='" . $_POST['referencia_info'] . "'"
        . " WHERE id_info_imovel = " . $_POST['id_info_imovel'];

        if($conn->query($sql) === TRUE){
            //print "Suces";
        } else {
            echo "Erro ao inserir o registro: " . $conn->error;
            //$conn->close();
        }
    }

    if(!empty($_POST['send_img'])){
        $id_imovel = $_POST['id_imovel'];
        $tipo_imagem = $_POST['cboTipo'];
        
        $nomeArquivo = $_FILES['imagem']['name'];
        $conteudoArquivo = $_FILES['imagem']['type'];
        $tamanhoArquivo = $_FILES['imagem']['size'];

        $sql = "SELECT inserir_imagem("
           . "" . $id_imovel . ","
           . "" . $tipo_imagem . ","
           . "" . $tamanhoArquivo . ","
           . "'" . $conteudoArquivo . "',"
           . "'" . $nomeArquivo . "'"
        .")";

        $rs = $conn->query($sql);

        if ($rs === FALSE) {
            echo "Erro ao inserir o registro: " . $conn->error;
        } else {
            $row = $rs->fetch_row();
            $id_img_imovel  = $row[0];
        }

        $diretorio = "../img/00" . $id_imovel . "/";

        $nome_arquivo = "00" . $id_img_imovel . ".jpg";

        $caminho_arquivo = $diretorio . $nome_arquivo;    
        $conteudoArquivo = file_get_contents($_FILES['imagem']['tmp_name']);
        if (file_put_contents($caminho_arquivo, $conteudoArquivo) !== false) {
            //print $caminho_arquivo;
        } else {
            echo "Ocorreu um erro ao criar a imagem.";
        }

    }

    if(!empty($_POST['edit_img'])){
        $id_img_imovel = $_POST['id_img_imovel'];
        $id_imovel = $_POST['id_imovel'];
        
        $nameArquivo = $_FILES['imagem_edit']['name'];
        $conteudoArquivo = $_FILES['imagem_edit']['type'];
        $tamanhoArquivo = $_FILES['imagem_edit']['size'];

        $sql = "UPDATE `img_imovel` SET "
            ." `tamanho_imagem`='" . $tamanhoArquivo . "',"
            ." `conteudo_imagem`='" . $conteudoArquivo . "',"
            ." `nome_imagem`='" . $nameArquivo . "'"
            ." WHERE id_img_imovel = " . $id_img_imovel;
        
        //print $sql;
        if($conn->query($sql) === TRUE){
            //print "Suces";
        } else {
            echo "Erro ao inserir o registro: " . $conn->error;
            //$conn->close();
        }

        $diretorio = "../img/00" . $id_imovel . "/";

        $nome_arquivo = "00" . $id_img_imovel . ".jpg";

        $caminho_arquivo = $diretorio . $nome_arquivo;   
        
        $conteudoArquivo = file_get_contents($_FILES['imagem_edit']['tmp_name']);
        if (file_put_contents($caminho_arquivo, $conteudoArquivo) !== false) {
            //print $caminho_arquivo;
        } else {
            echo "Ocorreu um erro ao editar a imagem.";
        }
    }
    
?>