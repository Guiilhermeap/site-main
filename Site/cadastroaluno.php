<?php

    include_once('conexao.php');
    
    $nome_aluno=$_POST['nome_aluno'];
    $matricula=$_POST['matricula'];

    $sql = 'INSERT INTO aluno (RA,senha,email,telefone,endereco,dt_matricula,CPF) VALUES (:RA,:senha,:nome,:email,:telefone,:endereco,:dt_matricula,:CPF)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':email',$email);
    $stmt->execute();