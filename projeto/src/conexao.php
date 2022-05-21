<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';

    $database = 'dionisiotech';
    $connection = mysqli_connect($host, $user, $password, $database);
    if (!$connection) {
        die('Erro de conexão: ' . mysqli_connect_error());
    }
    return $connection;

?>