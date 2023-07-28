<?php 
    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: login.php");
        exit;
    }

    $timeout_inatividade = 900; // 15 minutos

    if (isset($_SESSION['ultima_atividade'])) {
        $tempo_decorrido = time() - $_SESSION['ultima_atividade'];

        if ($tempo_decorrido > $timeout_inatividade) {
            session_destroy();

            header("Location: login.php");
            exit;
        }
    }

    $_SESSION['ultima_atividade'] = time();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php $raiz = "../"; include('connsql.php'); ?>
<?php include('control.php'); ?>
<head>
    <?php include('../components/head.php'); ?>
</head>
<body>
    <section class="w100 js-start al-center p30 vh100 grey column">
        <div class="w100 js-center al-center p30-0">
            <form class="w100" method="post" name="seleciona_imovel" id="seleciona_imovel">
                <div class="inputDiv d-flex column m10-0">
                    <label for="cboImovel">Imóvel:</label>
                    <?php include('selects/sel_imovel.php'); ?>
                </div>
                <button class="btn-calc" type="submit" id="seleciona" name="seleciona" value="seleciona">Selecionar</button>
            </form>
        </div>

        <div class="w100 js-center al-center p30-0">
            <form class="w100" method="post" name="add_imovel" id="add_imovel">
                <input type="hidden" id="id_imovel" name="id_imovel" value="<?php print $id_imovel; ?>">

                <div class="inputDiv js-btw m10-0">
                    <div class="w49 d-flex column">
                        <label for="nome_imovel">Nome Imovel</label>
                        <input type="text" name="nome_imovel" id="nome_imovel" value="<?php print $nome_imovel; ?>" maxlength="30" required> 
                    </div>

                    <div class="w49 d-flex column">
                        <label for="situacao_imovel">Situação Imovel</label>
                        <select id="situacao_imovel" name="situacao_imovel" required>
                            <option value="">Selecione uma situação</option>
                            <option value="1">Lançamento</option>
                            <option value="2">Últimas unidades</option>
                            <option value="3">Na planta</option>
                        </select>
                    </div>
                </div>

                <div class="inputDiv d-flex column m10-0">
                    <label for="descricao_imovel">Descrição Imovel</label>
                    <input type="text" name="descricao_imovel" id="descricao_imovel" value="<?php print $descricao_imovel; ?>" maxlength="120" required>
                </div>

                <div class="inputDiv d-flex column m10-0">
                    <label for="projeto_imovel">Projeto Imovel</label>
                    <textarea name="projeto_imovel" id="projeto_imovel" value="<?php print $projeto_imovel; ?>" maxlength="130" required></textarea>
                </div>
                
                <div class="inputDiv d-flex column m10-0">
                    <label for="planta_imovel">Planta do imóvel</label>
                    <textarea type="text" name="planta_imovel" id="planta_imovel" value="<?php print $planta_imovel; ?>" maxlength="130" required></textarea>
                </div>

                <div class="inputDiv js-btw m10-0">

                    <div class="w49 d-flex column">
                        <label for="qtd_quartos">Quantidade Quartos</label>
                        <input type="text" name="qtd_quartos" id="qtd_quartos" value="<?php print $qtd_quartos; ?>" maxlength="15" required>
                    </div>
                    
                    <div class="w49 d-flex column">
                        <label for="qtd_banheiros">Quantidade banheiros</label>
                        <input type="text" name="qtd_banheiros" id="qtd_banheiros" value="<?php print $qtd_banheiros; ?>" maxlength="15" required>
                    </div>

                </div>    

                <div class="inputDiv js-btw m10-0">

                    <div class="w49 d-flex column">
                        <label for="valor_imovel">Valor Imovel</label>
                        <input type="number" name="valor_imovel" id="valor_imovel" value="<?php print $valor_imovel; ?>" maxlength="10" required>
                    </div>
                    
                    <div class="w49 d-flex column">
                        <label for="metragem_imovel">Metragem Imóvel</label>
                        <input type="text" name="metragem_imovel" id="metragem_imovel" value="<?php print $metragem_imovel; ?>" maxlength="25" required>
                    </div>

                </div> 

                <div class="inputDiv js-btw m10-0">

                    <div class="w49 d-flex column">
                        <label for="localizacao_imovel">Localização Imóvel</label>
                        <input type="text" name="localizacao_imovel" id="localizacao_imovel" value="<?php print $localizacao_imovel; ?>" maxlength="100" required>
                    </div>
                    
                    <div class="w49 d-flex column">
                        <label for="url_imovel">URL do Imóvel</label>
                        <input type="text" name="url_imovel" id="url_imovel" value="<?php print $url_imovel; ?>" maxlength="300" required>
                    </div>

                </div> 
                
                <div class="inputDiv d-flex column m10-0">
                    <label for="id_maps_imovel">Código do Google Maps</label>
                    <input type="text" name="id_maps_imovel" id="id_maps_imovel" value="<?php print $id_maps_imovel; ?>" maxlength="300" required>
                </div>
                
                <?php 
                    if($id_imovel != ""){
                        print "<button class='btn-calc' type='submit' id='atualiza' name='atualiza' value='atualiza'>Salvar</button>";
                    } else {
                        print "<button class='btn-calc' type='submit' id='adiciona' name='adiciona' value='adiciona'>Enviar</button>";
                    }
                ?>
            </form>
        </div>

        <?php if(!empty($id_imovel)){ ?> 
        <div class="w100 js-center al-center p30-0">   
            <form class="w100" method="post" name="form_info_imovel" id="form_info_imovel">
                <input type="hidden" id="id_info_imovel" name="id_info_imovel">
                <input type="hidden" id="id_imovel" name="id_imovel" value="<?php print $id_imovel;?>">

                <div class="inputDiv js-btw m10-0">

                    <div class="w49 d-flex column">
                        <label for="info_imovel">Texto sobre localização</label>
                        <textarea type="text" name="info_imovel" id="info_imovel" maxlength="400"></textarea>                 
                    </div>
                    
                    <div class="w49 d-flex column">
                        <label for="referencia_info">Referências da Localização</label>
                        <textarea name="referencia_info" id="referencia_info" maxlength="250"></textarea>
                    </div>

                </div> 

                <button class="btn-calc" type="submit" id="add_info" name="add_info" value="add_info">Adicionar</button>
            </form>
        </div>
            
        <?php 
        print "<table>";
            print "<thead>";
                print "<th></th>";
                print "<th>Texto da localização</th>";
                print "<th>Referências da Localização</th>";
                print "<th></th>";
            print "<thead>";
            print "<tbody>";
                $sql = "SELECT id_info_imovel, info_imovel, referencia_info FROM info_imovel WHERE id_imovel = " . $id_imovel;
                $rs = $conn->query($sql);

                while($row = $rs->fetch_assoc()){
                    print "<tr>";
                        print "<td><button class='btn edit' value='" . $row['id_info_imovel'] . "'><i class='fa-regular fa-pen-to-square'></i></button></td>";
                        print "<td>" . $row['info_imovel'] . "</td>";
                        print "<td>" . $row['referencia_info'] . "</td>";
                        print "<td><button class='btn del' value='" . $row['id_info_imovel'] . "'><i class='fa-solid fa-trash'></i></button></td>";    
                    print "<tr>";
                }
            print "<tbody>";
        print "</table>";
        ?>

        <div class="w100 js-center al-center column p30-0">  
            <form class="w100" id="send_img" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id_imovel" name="id_imovel" value="<?php print $id_imovel;?>">

                <div class="inputDiv js-btw m10-0">

                    <div class="w49 d-flex column">
                        <select name="cboTipo" id="cboTipo">
                            <option value="">Selecione o tipo de imagem</option>
                            <option value="1">Capa</option>
                            <option value="2">Projeto - Imagem a esquerda</option>
                            <option value="3">Slide Projeto</option>
                            <option value="4">Planta - Imagem a esquerda</option>
                            <option value="5">Slide Planta</option>
                        </select>                
                    </div>
                    
                    <div class="w49 d-flex column">
                        <input class="btn-calc" type="file" name="imagem" id="imagem">
                    </div>

                </div> 

                <button class="btn-calc" type="submit" id="send_img" name="send_img" value="send_img">Adicionar</button>
            </form>

            <div class="w100 js-center al-start column">
            <?php 
            $sql = "SELECT id_img_imovel, id_imovel, tipo_imagem, tamanho_imagem, conteudo_imagem, nome_imagem "
                ." FROM img_imovel "
                ." WHERE id_imovel = " . $id_imovel;

                $rs = $conn->query($sql);
                while($row_img = $rs->fetch_assoc()){
                    print "<div class='text d-flex column'>";
                        switch($row_img['tipo_imagem']){
                            case "1"; 
                                print "<h2>Imagem Principal</h2>";
                                break;
                            case "2";
                                print "<h2>Projeto - Imagem a esquerda</h2>";
                                break;
                            case "3";
                                print "<h2>Slide Projeto</h2>";
                                break;
                            case "4";
                                print "<h2>Planta - Imagem a esquerda</h2>";
                                break;
                            case "5";
                                print "<h2>Slide Planta</h2>";
                                break;
                        };

                        print "<form class='d-flex column al-start' method='post' enctype='multipart/form-data'>";
                            print "<input type='hidden' id='id_img_imovel' name='id_img_imovel' value='" . $row_img['id_img_imovel'] . "'>";
                            print "<input type='hidden' id='id_imovel' name='id_imovel' value='$id_imovel'>";
                            print "<div class='boxImg'>";
                                print "<img src='../img/00" . $row_img['id_imovel'] . "/00" . $row_img['id_img_imovel'] . ".jpg' alt='Imagem no site do imóvel.'>";
                            print "</div>";
                            print "<div class='inputDiv' style='color: var(--branco)'>";
                                print "<input type='file' name='imagem_edit' id='imagem_edit' required>";
                            print "</div>";
                            print "<div class='inputDiv js-btw m10-0 w100'>";

                                print "<div class='w49 d-flex column'>";
                                    print "<button class='btn-calc' type='submit' id='edit_img' name='edit_img' value='edit_img'>Editar</button>";
                                print "</div>";
                                
                                print "<div class='w49 d-flex column'>";
                                    print "<button class='btn-calc' type='button' id='" . $row_img['id_img_imovel'] . "' im='" . $row_img['id_imovel'] . "' class='del_img' id='del_img' name='del_img' value='del_img'><i class='fa-solid fa-trash'></i></button>";
                                print "</div>";

                            print "</div>";
                        print "</form>";
                    print "</div>";
                }

            } ?>
            </div>
        </div>
    </section>
<script src="../js/jquery-min.js"></script>
<script src="js/del.js"></script>
<script src="js/edit.js"></script>
</body>
</html>
