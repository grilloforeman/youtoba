<?php 
$servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $dbname = "testetuba";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
global $conn;
    ?>