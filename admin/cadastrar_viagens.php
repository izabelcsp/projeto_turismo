<?php
// include do controle de sessão
include '../backend/controle_sessao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro de Viagens</title>
</head>

<body>
    <div id="container">
        <h3>Cadastro de Viagens</h3>

        <hr>
        <button><a href="../listar_viagens.php">Listar Viages</a></button>
        <button><a href="gerenciar_viagens.php">Gerenciar</a></button>
        <button><a href="../backend/logout.php">Sair</a></button>
        <hr>

        <form action="../backend/_cadastrar_viagens.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo">
            </div>
            <div>
                <label for="local">Local</label>
                <input type="text" name="local" id="local">
            </div>
            <div>
                <label for="valor">Valor</label>
                <input type="number" name="valor" id="valor">
            </div>
            <div>
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" id="imagem">
            </div>
            <div>
                <label for="desc">Descrição</label>
                <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
            </div>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

</body>

</html>