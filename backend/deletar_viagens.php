<?php

include'conexao.php';

try{
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_viagens WHERE id=$id";

    $comando=$con->prepare($sql);

    $comando->execute();

    header('location: ../admin/gerenciar_viagens.php');


}catch(PDOException $e){
    echo $e->getMessage();
}

?>