<?php

try{
    // dados da conexão com o DB
    define('SERVER','localhost');
    define('USER','root');
    define('PASSAWORD','');
    define('DATABASE','db_turismo');

    $conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE, USER, PASSAWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $erro) {
    echo "Connection failed: " . $e->getMessage();
  }

?>