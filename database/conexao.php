<?php 
    $parametro = filter_input(INPUT_GET, "parametro");
    $mysqli = new mysqli("localhost", "root", "vasco1898", "veterinaria"); //unisuam123
    
    // Verifica a conexão
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar ao MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit();
    }
    
?>