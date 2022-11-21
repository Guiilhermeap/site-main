<?php
    $hostname="localhost";
    $usuario="root";
    $senha="";
    $bancodedados="teste02";

    $conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if ($conexao -> connect_errno) {
        echo "Houve um erro: ";
    }
    else {
        echo "Conexão efetuada com sucesso";
    }
?>