<?php
// inicia a sessão 
session_start();

// O isset verifica se a variavel de sessão existe 
if(isset($_SESSION['usuario'])){
    header('location:gerenciar_viagens.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Tela Login</title>
</head>

<body>
    <div id="container">
        <div class="grid-caixa">
            
            <form action="../backend/_validar_login.php" method="post">
                <h3>Faça seu Login</h3>
                <div class="grid-login">

                    <div class="input-bt">
                        
                        <input type="email" name="usuario" id="usuario" placeholder="Digite seu Usuario">
                    </div>

                    <div class="input-bt">
                        
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>

                </div>
                <div class="botao-entrar">
                    <input type="submit" value="Entrar">
                </div>
            </form>
           
        </div>
    </div>
</body>

</html>