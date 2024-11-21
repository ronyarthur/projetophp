<?php
    $user = 'root';
    $password = '';
    $database = 'meudb';
    $host = 'localhost';

    $mysqli = new mysqli($host, $user, $password, $database);
    
    //** verificar se o banco de dados tá conectando */
    if($mysqli->error){
        die("falha ao conectar ao banco de dados: ". $mysqli->error);
    }


?>