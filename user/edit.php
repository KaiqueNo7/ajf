<?php 
include('connsql.php');

if(!empty($_POST['id_info_imovel'])){
    $id_info_imovel = $_POST['id_info_imovel'];

    $sql = "SELECT id_info_imovel, info_imovel, referencia_info FROM info_imovel WHERE id_info_imovel = " . $id_info_imovel;
    $rs = $conn->query($sql);

    if($row = $rs->fetch_assoc()){
        $id_info_imovel = $row['id_info_imovel'];
        $info_imovel = $row['info_imovel'];
        $referencia_info = $row['referencia_info']; 
    }

    $response = array(
        'id_info_imovel' => $id_info_imovel,
        'info_imovel' => $info_imovel,
        'referencia_info' => $referencia_info
    );

    print json_encode($response);
}


?>