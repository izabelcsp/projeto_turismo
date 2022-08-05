<?php

// Include da conexão com o banco de dados 
include'conexao.php';

try{
    // Exibe as váriaveis globais recebidas via POST
    // echo"<pre>";
    // var_dump($_POST);
    // echo"<pre>";

    // variaveis que recebem os dados enviados via POST
    $titulo = $_POST['titulo'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];

    // variavel que recebe a query SQL que será executada na BD
    $sql = "INSERT INTO 
    tb_viagens 
    (
    Titulo,
    `Local`,
    Valor,
    `Desc`
    ) 
    VALUES 
    (
    '$titulo','$local','$valor','$desc'
    )
    ";

 // Prepara a execucão da query SQL acima
$comando = $con->prepare($sql);

// executa o ca
$comando->execute();

// exibe msg de sucesso ao inserir
echo "cadastrado com sucesso!";


// fechar a conexão
$con = null;

}catch(PDOException $erro){

}
