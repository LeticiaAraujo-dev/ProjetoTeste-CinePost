<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'blogdecinema');

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    if($conn->error){
        die("Falha na conexão ao Banco de Dados: ".$conn->error);
    }
?>