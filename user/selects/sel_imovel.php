<?php 
    $sql = "SELECT id_imovel, nome_imovel FROM imovel";
    $rs = $conn->query($sql);
    
    print "<select id='cboImovel' name='cboImovel'>";
        print "<option value=''>Selecione um imóvel</option>";
        while($row = $rs->fetch_assoc()){
            if($id_imovel == $row['id_imovel']){
                print "<option value='" . $row['id_imovel'] . "' selected>" . $row['nome_imovel'] . "</option>";  
            } else {
                print "<option value='" . $row['id_imovel'] . "'>" . $row['nome_imovel'] . "</option>";
            }
            
        }
    print "</select>"
?>