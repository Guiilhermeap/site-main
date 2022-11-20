<?php
    $hostname="localhost";
    $usuario="root";
    $senha="";
    $bancodedados="trabalho01";

    $conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

    // if ($conexao -> connect_errno) {
    //     echo "Houve um erro: ";
    // }
    // else {
    //     echo "Conexão efetuada com sucesso";
    // }
?>