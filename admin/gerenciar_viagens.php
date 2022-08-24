<?php

include'../backend/conexao.php';

try{

    $sql =  "SELECT * FROM tb_viagens";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    // echo"<pre>";
    // var_dump($dados);
    // echo"</pre>";
    
}catch(PDOException $erro){
    
};

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Gerenciar viagens</title>
</head>
<body>
<div id="container">
        <h3>Gerenciar Viagens</h3>

        <hr>
        <button><a href="cadastrar_viagens.html">Cadastrar Viages</a></button>
        <button><a href="index.html">Sair</a></button>
        <hr>


        <div id="tabela">
            <table border ="1">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Local</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>

                <?php
                    foreach($dados as $viagem):
                ?>

                <tr>
                    <td><?php echo $viagem['id']?></td>
                    <td><?php echo $viagem['Titulo']?></td>
                    <td><?php echo $viagem['Local']?></td>
                    <td>R$<?php echo $viagem['Valor']?></td>
                    <td><?php echo $viagem['Desc']?></td>
                    <td>
                        <a href="alterar_viagens.php?id=<?php echo $viagem['id']?>">Alterar</a>
                    </td>
                    <td>
                        <a href="../backend/deletar_viagens.php?id=<?php echo $viagem['id']?>">Deletar</a>
                    </td>
                </tr>

                <?php
                    endforeach
                ?>

            </table>
        </div>
    </div>
    
</body>
</html>