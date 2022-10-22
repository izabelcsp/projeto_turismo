<?php

try{
    // dados da conexão com o DB
    define('SERVER','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','db_turismo2');

    $con = new PDO("mysql:host=".SERVER.";dbname=".DATABASE, USER, PASSWORD);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $erro) {
    echo "Connection failed: " . $e->getMessage();
  }

?>