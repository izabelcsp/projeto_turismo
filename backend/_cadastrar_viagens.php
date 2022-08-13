<?php


// include da conexão com  o banco de dados

include 'conexao.php';

try{
    // exibe as variaveis globais recebidas via POST
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    //  variaveis que recebem os dados enviados via POST
    $titulo = $_POST['Titulo'];
    $local = $_POST['Local'];
    $valor = $_POST['Valor'];
    $desc = $_POST['Desc'];

    // variavel que recebe a query SQL que sera executada no BD
    $sql = "INSERT INTO
                tb_viagens
                (
                    `Titulo`,
                    `Local`,
                    `Valor`,
                    `Desc`
                )
                VALUES
                (
                    '$titulo',
                    '$local',
                    '$valor',
                    '$desc'
                )
            ";
                    
    // prepara a execução da query SQL acima
     
    $comando = $conn ->prepare($sql);

    // executa o comando com a query no banco de dados

    $comando->execute();

    // 

    echo "Cadastro realizado com sucesso";



}catch(PDOException $erro){

}

// final da conexão
?>