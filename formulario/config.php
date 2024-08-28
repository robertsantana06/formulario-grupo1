<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //validando conexão
    if ($conexao->connect_errno) 
    {
        echo "Erro";
    }else {
        echo "Conexão realizada";
    }

?>