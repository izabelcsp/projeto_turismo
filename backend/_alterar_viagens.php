<?php
// include da conexão
include "conexao.php";

try{
    // var_dump($_POST);
    // exit;
    // var recebidas via $post
    $id     = $_POST['id'];
    $Titulo = $_POST['titulo'];
    $Local  = $_POST['local'];
    $Valor  = $_POST['valor'];
    $Desc   = $_POST['desc'];

    $sql = "UPDATE  tb_viagens 
    SET 
    `Titulo`  = '$Titulo',
    `Local` = '$Local',
    `Valor` = '$Valor',
    `Desc`  = '$Desc'

    WHERE 
        id = $id;
    ";

     $comando = $conn->prepare($sql);

     $comando -> execute();
 
     header('Location: ../admin/alterar_viagens.php?id='.$id);
    


}catch(PDOException $erro){
    echo $erro->getMessage();

}

?>