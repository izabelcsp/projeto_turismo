<?php
// incluindo arquivo de conexão
include 'backend/conexao.php';

try {

    // monta a query sql
    $sql = "SELECT * FROM tb_viagens";

    // prepara a execução da query sql acima
    $comando = $con->prepare($sql);

    // executa o comando com a query no banco de dados
    $comando->execute();

    // cria a var que irá armazenar os dados, e setando o fetch em modo associativo(chave/valor)
    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    // sempre fechar o pre
    // echo"<pre>";
    // var_dump($dados); 
    // echo"</pre>";

} catch (PDOException $erro) {
    echo $erro->getMessage();
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de viagens</title>
</head>

<body>

        <hr>
        <button><a href="admin/index.html">Sair</a></button>
        <hr>

    <div id="container">
        <h3>Lista de Viagens</h3>
        <div id="grid-viagens">
            <?php
            foreach ($dados as $d):
            ?>
                <figure class="figure-viagens">
                    <img class="img-viagens" src="img/upload/<?php echo $d['imagem']?>" alt="imagem da viagem ">
                    <figcaption class="figcaption-viagens">
                        <h4><?php echo $d['Titulo']; ?></h4>
                        <h5><?php echo $d['Local']; ?></h5>
                        <h5>R$<?php echo $d['Valor']; ?></h5>
                        <small><?php echo $d['Desc']; ?></small>
                        <button class="btn-viagens">Comprar</button>
                    </figcaption>
                </figure>

            <?php endforeach;?>

        </div>
    </div>

</body>

</html>