<?php
    $user = 'root';
    $password = '';
    $database = 'bd_atividade';
    $host = 'localhost';

    $mysqli = new mysqli($host, $user, $password, $database);
    
    //** verificar se o banco de dados tá conectando */
    if($mysqli->error){
        die("falha ao conectar ao banco de dados: ". $mysqli->error);
    }


?>