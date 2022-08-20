<?php 
// include da coneção
include'../backend/conexao.php';

// capitura a variavel global id recebida via GET
$id = $_GET['id'];

try{
    // comando SQL que irá selecionar as viagens por id 
    $sql = "SELECT * FROM tb_viagens WHERE id = $id";

    $comando = $con->prepare($sql);

    $comando -> execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($dados);
    // echo "</pre>";
    // echo [0] ['titulo'];



}catch(PDOException $erro){
    echo $erro->getMessage();

}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Alterar Viagens</title>
</head>

<body>
    <div id="container">
        <h3>Alterar Viagens</h3>
        <form action="../backend/_alterar_viagens.php" method="post">

            <div id="grid_alterar">
                <div>
                    <label for="">ID</label>
                    <input type="text" name="id" id="id" value="<?php echo $dados[0]['id'];?>" readonly>
                </div>
                <div>
                    <label for="">Titulo</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $dados[0]['Titulo'];?>">
                </div>
                <div>
                    <label for="local">Local</label>
                    <input type="text" name="local" id="local" value="<?php echo $dados[0]['Local'];?>">
                </div>
                <div>
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" id="valor" value="<?php echo $dados[0]['Valor'];?>">
                </div>
                <div>
                    <label for="desc">Descrição</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"><?php echo $dados[0]['Desc'];?></textarea>
                </div>
                <input type="submit" value="Salvar">
            </div>

        </form>

    </div>
</body>

</html>